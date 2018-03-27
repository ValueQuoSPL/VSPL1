<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact_us_model
 */
class Contact_us_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// < -------contact_us Start------->

    function savecontact_us() {
        $this->db->trans_start();
        $data = array(
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'contact_number' => $this->input->post('contact_number'),
            'description' => $this->input->post('description'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('contact_detail', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getcontact_us($id) {
        $this->db->select('*');
        $this->db->from('contact_detail');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getcontact_uss() {
        $this->db->select('id,address,email,lat,lng,contact_number,description,status');
        $this->db->from('contact_detail');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deletecontact_us($id) {
        $this->db->where('id', $id);
        return $this->db->delete('contact_detail');
    }

    function updatecontact_us($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'contact_number' => $this->input->post('contact_number'),
            'description' => $this->input->post('description'),
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lng'),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('contact_detail', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------contact_us End------->
}
