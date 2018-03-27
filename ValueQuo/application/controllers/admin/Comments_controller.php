<?php

class Comments_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Comments_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------comments Start---->
    public function comments() {
//        $this->data['data'] = $this->Comments_model->getcomments();
        $this->data['title'] = "Comments";
        $this->data['template'] = "Comments/comments";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Comments"));
        $this->admin_layout($this->data);
    }

    public function edit_comments($id) {
        $this->data['title'] = "Comments";
        $this->data['data'] = $this->Comments_model->getcomments($id);
        $this->data['template'] = "Comments/edit_comments";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Comments"));
        $this->admin_layout($this->data);
    }

    public function save_comments() {
       $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('comment', 'Comment', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_comments();
        } else {
            $result = $this->Comments_model->savecomments();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Added Successfully.', 'type' => 's'));
                redirect('admin/comments');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Not Added.', 'type' => 'e'));
                redirect('admin/add_comments');
            }
        }
    }

    public function update_comments() {
        $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('comment', 'Comment', 'required');

        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_comments();
        } else {
            $result = $this->Comments_model->updatecomments($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Updated Successfully.', 'type' => 's'));
                redirect('admin/comments');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Not Updated.', 'type' => 'e'));
                redirect('admin/edit_comments');
            }
        }
    }

    public function delete_comments($id) {
        $result = $this->Comments_model->deletecomments($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/comments');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Comments Record Not deleted.', 'type' => 'e'));
            redirect('admin/comments');
        }
    }

    public function add_comments() {
        $this->data['title'] = "Comments";
        $this->data['template'] = "Comments/add_comments";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Comments"));
        $this->admin_layout($this->data);
    }

    public function getcommentsdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Comments Details');
        $edit_link = anchor('admin/Comments_controller/edit_comments/$1', '<i class="fa fa-file-text-o"></i> ' . 'Comments Edit');
        $delete_link = anchor('admin/Comments_controller/delete_comments/$1', '<i class="fa fa-trash-o"></i> ' . 'Comments Delete');
        $action = '<div class="text-center"><div class="btn-group text-left">'
                . '<button type="button" class="btn bg-color-magenta txt-color-white btn-xs dropdown-toggle" data-toggle="dropdown">'
                . 'Actions' . ' <i style="color:#fff" class="fa fa-caret-down"></i></button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>' . $edit_link . '</li>
			<li>' . $delete_link . '</li>
			</ul>
		</div></div>';
        $result = $this->Setting_model->get_UserGroup();
        if ($result->group_id == 1) {
            $this->datatables
                    ->select("id,name,email,comment,status")
                    ->from('comments');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,name,email,comment,status")
                    ->from('comments')
                    ->where('comments.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------comments End---->
}