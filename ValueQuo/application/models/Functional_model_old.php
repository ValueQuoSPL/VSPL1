<?php

class Functional_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->library('encrypt');
        $this->load->helper('date');
        $this->load->database();
    }

    public function insert($request) {
        $insertStatus = $this->db->insert('registration', array(
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['phone'],
            'message' => $request['comment'],
            'create_date' => date("Y-m-d H:i:s"),
            'status' => "Active",
            'userby' => 1
        ));
        return $insertStatus;
    }
    public function subscribe_email($request) {
        $subscribe = $this->db->insert('subscribe', array(
            'email' => $request['email'],
            'create_date' => date("Y-m-d H:i:s"),
            'status' => "Active",
            'userby' => 1
        ));
        return $subscribe;
    }
     
    public function insert_contact($request) {
        $insertStatus = $this->db->insert('registration', array(
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['phone'],
            'message' => $request['message'],
            'create_date' => date("Y-m-d H:i:s"),
            'status' => "Active",
            'userby' => 1
        ));
        return $insertStatus;
    }
     

    public function insert_comment($request, $blog_id) {
        $insert_comment = $this->db->insert('comments', array(
            'blog_id' => $blog_id,
            'name' => $request['name'],
            'email' => $request['email'],
            'comment' => $request['comment'],
            'create_date' => date("Y-m-d H:i:s"),
            'status' => "Active",
            'userby' => 1
        ));
        return $insert_comment;
    }

    public function insert_blog_likes_count($request) {
        $data = array(
            'likes' => $request['count']
        );
        $this->db->where('id', $request['id']);
        $rs = $this->db->update('blogs ', $data);
        return $rs;
    }

    public function fetch_contact_data() {
        return $this->db->from($this->table_name)->get('contact_detail')->result_array();
    }

    public function fetch_blog_data() {
        return $this->db->from($this->table_name)->get('blogs')->result_array();
    }

    public function fetch_comments_data($id) {
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->where('blog_id', $id);
        $rs = $this->db->get()->result_array();
        return $rs;
    }

    public function commentsCount($id) {
        $rs = $this->db->select('*')
                        ->from('comments')
                        ->where('blog_id', $id)
                        ->get()->result();
        $data = count($rs);
        return $data;
    }

    public function blogCommentsCount() {
        $rs = $this->db->select('*')
                        ->from('comments')
                        ->group_by('blog_id')
                        ->get()->result();
        $data = count($rs);
        return $data;
    }

    public function fetch_blog_details($id) {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $rs = $this->db->get()->row();
        return $rs;
    }

    public function fetch_google_map_data() {
//        return $this->db->from($this->table_name)->get('contact_detail')->result_array();
        $this->db->select('address,lat,lng');
        $this->db->from('contact_detail');
        $rs = $this->db->get()->result();
        return $rs;
    }

}
