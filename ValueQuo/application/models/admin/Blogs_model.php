<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Blogs_model
 */
class Blogs_model extends MY_Model {

//put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('Ion_auth_model', 'ion');
    }

// < -------blogs Start------->

    public function saveblogs() {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $imgdata = $this->upload->data();
        }
        $this->db->trans_start();
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $imgdata['file_name'],
            'create_date' => date('Y-m-d h:i:s', now()),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id')
        );
        $this->db->insert('blogs', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function getblogs($id) {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }

    public function getblogss() {
        $this->db->select('id,title,description,image,status');
        $this->db->from('blogs');
        $query = $this->db->get()->result();
        return $query;
    }

    public function deleteblogs($id) {
        $this->db->where('id', $id);
        return $this->db->delete('blogs');
    }

    function updateblogs($data) {
        $this->db->trans_start();
        $id = $data['id'];
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $this->input->post('image'),
            'status' => $this->input->post('status'),
            'userby' => $this->session->userdata('user_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }

//    <-------blogs End------->
}
