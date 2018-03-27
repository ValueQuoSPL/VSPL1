<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_registration_model
 */
class Admin_registration_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
        $this->load->config('ion_auth', TRUE);
        $this->load->helper('cookie');
        $this->load->helper('date');
        $this->lang->load('ion_auth');
        // initialize db tables data
        $this->tables = $this->config->item('tables', 'ion_auth');

        //initialize data
        $this->identity_column = $this->config->item('identity', 'ion_auth');
        $this->store_salt = $this->config->item('store_salt', 'ion_auth');
        $this->salt_length = $this->config->item('salt_length', 'ion_auth');
        $this->join = $this->config->item('join', 'ion_auth');
        $this->config->item('hash_method', 'ion_auth');

        // initialize hash method options (Bcrypt)
        $this->hash_method = $this->config->item('hash_method', 'ion_auth');
        $this->default_rounds = $this->config->item('default_rounds', 'ion_auth');
        $this->random_rounds = $this->config->item('random_rounds', 'ion_auth');
        $this->min_rounds = $this->config->item('min_rounds', 'ion_auth');
        $this->max_rounds = $this->config->item('max_rounds', 'ion_auth');

        // initialize messages and error
        $this->messages = array();
        $this->errors = array();
        $delimiters_source = $this->config->item('delimiters_source', 'ion_auth');
    }

// < -------admin_registration Start------->
    public function hash_password($password, $salt = false, $use_sha1_override = FALSE) {
        if (empty($password)) {
            return FALSE;
        }

        // bcrypt
        if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt') {
            return $this->bcrypt->hash($password);
        }


        if ($this->store_salt && $salt) {
            return sha1($password . $salt);
        } else {
            $salt = $this->salt();
            return $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
        }
    }

    public function hash_password_db($id, $password, $use_sha1_override = FALSE) {
        if (empty($id) || empty($password)) {
            return FALSE;
        }

        $this->trigger_events('extra_where');
        $query = $this->db->select('password, salt')
                ->where('id', $id)
                ->limit(1)
                ->order_by('id', 'desc')
                ->get($this->tables['users']);

        $hash_password_db = $query->row();

        if ($query->num_rows() !== 1) {
            return FALSE;
        }

        // bcrypt
        if ($use_sha1_override === FALSE && $this->hash_method == 'bcrypt') {
            if ($this->bcrypt->verify($password, $hash_password_db->password)) {
                return TRUE;
            }

            return FALSE;
        }

        // sha1
        if ($this->store_salt) {
            $db_password = sha1($password . $hash_password_db->salt);
        } else {
            $salt = substr($hash_password_db->password, 0, $this->salt_length);

            $db_password = $salt . substr(sha1($salt . $password), 0, -$this->salt_length);
        }

        if ($db_password == $hash_password_db->password) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Generates a random salt value for forgotten passwords or any other keys. Uses SHA1.
     *
     * @return void
     * @author Mathew
     * */
    public function hash_code($password) {
        return $this->hash_password($password, FALSE, TRUE);
    }

    /**
     * Generates a random salt value.
     *
     * Salt generation code taken from https://github.com/ircmaxell/password_compat/blob/master/lib/password.php
     *
     * @return void
     * @author Anthony Ferrera
     * */
    public function salt() {

        $raw_salt_len = 16;

        $buffer = '';
        $buffer_valid = false;

        if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
            $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
            $buffer = openssl_random_pseudo_bytes($raw_salt_len);
            if ($buffer) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid && @is_readable('/dev/urandom')) {
            $f = fopen('/dev/urandom', 'r');
            $read = strlen($buffer);
            while ($read < $raw_salt_len) {
                $buffer .= fread($f, $raw_salt_len - $read);
                $read = strlen($buffer);
            }
            fclose($f);
            if ($read >= $raw_salt_len) {
                $buffer_valid = true;
            }
        }

        if (!$buffer_valid || strlen($buffer) < $raw_salt_len) {
            $bl = strlen($buffer);
            for ($i = 0; $i < $raw_salt_len; $i++) {
                if ($i < $bl) {
                    $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                } else {
                    $buffer .= chr(mt_rand(0, 255));
                }
            }
        }

        $salt = $buffer;

        // encode string with the Base64 variant used by crypt
        $base64_digits = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
        $bcrypt64_digits = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $base64_string = base64_encode($salt);
        $salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);

        $salt = substr($salt, 0, $this->salt_length);


        return $salt;
    }

    function saveadmin_registration() {
      
        $pass = $this->hash_password($_POST['password']);

        $data = array(
            'f_name' => $this->input->post('f_name'),
            'l_name' => $this->input->post('l_name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
            'cust_password' => $this->input->post('password'),
            'password' => $pass,
            'create_date' => date('Y-m-d h:i:s', now()),
            'group_id' => 2,
            'active' => 1,
            'usertype' => 'customer',
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('admin_user', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getadmin_registration($id) {
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getadmin_registrations() {
        $this->db->select('id,f_name,l_name,username,email,phone,gender,status');
        $this->db->from('admin_user');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deleteadmin_registration($id) {
        $this->db->where('id', $id);
        return $this->db->delete('admin_user');
    }

    function updateadmin_registration($data) {
        $this->db->trans_start();

        if ($this->input->post('password') == $_POST['passwordP']) {
            $pswd = $_POST['passwordP'];
        } else {
            $pswd = $this->hash_password($this->input->post('password'));
        }
         
        $id = $data['id'];
        $data = array(
            'f_name' => $this->input->post('f_name'),
            'l_name' => $this->input->post('l_name'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'gender' => $this->input->post('gender'),
            'password' => $pswd,
            'create_date' => date('Y-m-d h:i:s', now()),
            'group_id' => 2,
            'active' => 1,
            'usertype' => 'customer',
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->where('id', $id);
        $this->db->update('admin_user', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------admin_registration End------->
}
