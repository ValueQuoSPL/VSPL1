<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Comments_model
 */
class Comments_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// < -------comments Start------->

    function savecomments() {
        $this->db->trans_start();
        $data = array(
            'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'comment'=>$this->input->post('comment'),

            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('comments', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getcomments($id) {
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getcommentss() {
        $this->db->select('id,name,email,comment,status');
        $this->db->from('comments');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deletecomments($id) {
        $this->db->where('id', $id);
        return $this->db->delete('comments');
    }

    function updatecomments($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'name'=>$this->input->post('name'),
'email'=>$this->input->post('email'),
'comment'=>$this->input->post('comment'),

            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('comments', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------comments End------->
}