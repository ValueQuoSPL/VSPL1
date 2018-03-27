<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRequest_model
 */
class UserRequest_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// < -------Request Start------->

    function saveRequest() {
        $this->db->trans_start();
        $data = array(
            'name'=>$this->input->post('name'),
'mobile'=>$this->input->post('mobile'),
'message'=>$this->input->post('message'),

            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('user_request', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getRequest($id) {
        $this->db->select('*');
        $this->db->from('user_request');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getRequests() {
        $this->db->select('id,name,mobile,message,status');
        $this->db->from('user_request');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deleteRequest($id) {
        $this->db->where('id', $id);
        return $this->db->delete('user_request');
    }

    function updateRequest($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'name'=>$this->input->post('name'),
'mobile'=>$this->input->post('mobile'),
'message'=>$this->input->post('message'),

            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('user_request', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------Request End------->
}