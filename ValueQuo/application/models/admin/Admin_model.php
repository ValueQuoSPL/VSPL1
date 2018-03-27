<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_model
 *
 * @author comc
 */
class Admin_model extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
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

    public function getAdminMenus() {
        return $this->getResult($this->db->select('id,name')->get_where('admin_menu', array('parent_id' => 0)));
    }

    public function getAdminMenu($id) {
        $rs = $this->db->select('*')
                        ->from('admin_menu')
                        ->where('status', 'Active')
                        ->where('id', $id)
                        ->get()->row();
        return $rs;
//        return $this->getResult($this->db->get_where('admin_menu', array('id' => $id)));
    }

    public function updateAdminMenu($data, $id) {
        if ($this->db->update('admin_menu', $data, array('id' => $id))) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function saveMenu($data) {
        if ($this->db->insert('admin_menu', $data)) {
            return TRUE;
        } else {
            return false;
        }
    }

// public function getnotification() {
// $this->db->select('fname,lname,user_betting.bet_amount,user_betting.create_date');
// $this->db->from('user_betting');
// $this->db->join('register', 'user_betting.user_id = register.id', 'left');
// $this->db->limit(4);
// $query = $this->db->get()->result();
// if ($query) {
// return $query;
// } else {
// return false;
// }
// }



//    public function getUserType() {
//        $rs = $this->db->select('id,name')
//                        ->from('ship_address_book_type')
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//
//    public function getCountryData() {
//        $rs = $this->db->select('id,name')
//                        ->from('ship_countries')
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//
//    public function getStateData($id) {
//        $rs = $this->db->select('id,name')
//                        ->from('ship_states')
//                        ->where('country_id', $id)
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//
//    public function getCompanyName($id) {
//        $rs = $this->db->select('*')
//                        ->from('ship_address_book')
//                        ->where('add_book_type', $id)
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//
//    public function getCityData($id) {
//        $rs = $this->db->select('id,name')
//                        ->from('ship_cities')
//                        ->where('state_id', $id)
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//
////    public function total_counts($table_name) {
////
////        $rs = $this->db->select('id')
////                        ->from($table_name)
////                        ->get()->result();
////        $total = count($rs);
////        return $total;
////    }
//
//    public function registrationData() {
//        $pass = $this->hash_password($_POST['password']);
//        $data = array(
//            'username' => $this->input->post('username'),
//            'email' => $this->input->post('email'),
//            'password' => $pass,
//            'phone' => $this->input->post('mobile'),
//            'f_name' => $this->input->post('first_name'),
//            'cust_password' => $this->input->post('password'),
//            'l_name' => $this->input->post('last_name'),
//            'gender' => $this->input->post('gender'),
//            'create_date' => date('Y-m-d h:i:s', now()),
//            'modify_date' => date('Y:m:d h:i:s'),
//            'status' => "Deactive",
//            'usertype' => "customer",
//            'group_id' => 2,
//            'active' => 0,
//        );
//        $rs = $this->db->insert('ship_admin_user', $data);
//        return $rs;
//    }

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

//    public function getForgotPassword() {
//
//        $rs = $this->db->select('id,email,password')
//                        ->from('ship_admin_user')
//                        ->where('ship_admin_user.email', $_POST['email'])
//                        ->get()->result();
//
//        return $rs;
//    }
//
//    public function getpasswordInfo($id) {
//
//        $rs = $this->db->get_where('ship_admin_user', array('id' => $id))->row();
//        return $rs;
//    }
//
//    public function getChangePassword($data) {
//        $pass = $this->hash_password($_POST['password']);
//        $ele = array(
//            'password' => $pass,
//        );
//        $id = $_POST['id'];
//        $this->db->where('id', $id);
//        $rs = $this->db->update('ship_admin_user', $ele);
//
//        return $rs;
//    }
//
//    public function getUniqueId($email) {
//        $rs['details'] = $this->db->select('ship_admin_user.email')
//                        ->where('ship_admin_user.email', $email)
//                        ->from('ship_admin_user')
//                        ->get()->result();
//        if (!empty($rs['details'])) {
//            return 1;
//        } else {
//            return 0;
//        }
//    }
//
//    public function getStatesdata($id) {
//        $rs = $this->db->select('*')
//                        ->from('ship_states')
//                        ->where('country_id', $id)
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }
//      public function getCitiesData($id) {
//        $rs = $this->db->select('*')
//                        ->from('ship_cities')
//                        ->where('state_id', $id)
//                        ->where('status', 'Active')
//                        ->get()->result();
//        return $rs;
//    }

}
