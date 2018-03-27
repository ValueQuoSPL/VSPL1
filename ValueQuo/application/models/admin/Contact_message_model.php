<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact_message_model
 */
class Contact_message_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// < -------contact_message Start------->

    function savecontact_message() {
        $this->db->trans_start();
        $data = array(
            'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'mobile'=>$this->input->post('mobile'),
'	message'=>$this->input->post('	message'),

            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('registration', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getcontact_message($id) {
        $this->db->select('*');
        $this->db->from('registration');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getcontact_messages() {
        $this->db->select('id,name,email,mobile,	message,status');
        $this->db->from('registration');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deletecontact_message($id) {
        $this->db->where('id', $id);
        return $this->db->delete('registration');
    }

    function updatecontact_message($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'mobile'=>$this->input->post('mobile'),
'	message'=>$this->input->post('	message'),

            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('registration', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------contact_message End------->
}