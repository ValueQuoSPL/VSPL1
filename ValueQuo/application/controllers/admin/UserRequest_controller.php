<?php

class UserRequest_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/UserRequest_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------Request Start---->
    public function Request() {
//        $this->data['data'] = $this->UserRequest_model->getRequest();
        $this->data['title'] = "Request";
        $this->data['template'] = "User Request/Request";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Request"));
        $this->admin_layout($this->data);
    }

    public function edit_Request($id) {
        $this->data['title'] = "Request";
        $this->data['data'] = $this->UserRequest_model->getRequest($id);
        $this->data['template'] = "User Request/edit_Request";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Request"));
        $this->admin_layout($this->data);
    }

    public function save_Request() {
       $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
$this->form_validation->set_rules('message', 'Message', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_Request();
        } else {
            $result = $this->UserRequest_model->saveRequest();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Added Successfully.', 'type' => 's'));
                redirect('admin/Request');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Not Added.', 'type' => 'e'));
                redirect('admin/add_Request');
            }
        }
    }

    public function update_Request() {
        $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
$this->form_validation->set_rules('message', 'Message', 'required');

        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_Request();
        } else {
            $result = $this->UserRequest_model->updateRequest($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Updated Successfully.', 'type' => 's'));
                redirect('admin/Request');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Not Updated.', 'type' => 'e'));
                redirect('admin/edit_Request');
            }
        }
    }

    public function delete_Request($id) {
        $result = $this->UserRequest_model->deleteRequest($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/Request');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Request Record Not deleted.', 'type' => 'e'));
            redirect('admin/Request');
        }
    }

    public function add_Request() {
        $this->data['title'] = "Request";
        $this->data['template'] = "User Request/add_Request";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Request"));
        $this->admin_layout($this->data);
    }

    public function getRequestdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Request Details');
        $edit_link = anchor('admin/UserRequest_controller/edit_Request/$1', '<i class="fa fa-file-text-o"></i> ' . 'Request Edit');
        $delete_link = anchor('admin/UserRequest_controller/delete_Request/$1', '<i class="fa fa-trash-o"></i> ' . 'Request Delete');
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
                    ->select("id,name,mobile,message,status")
                    ->from('user_request');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,name,mobile,message,status")
                    ->from('user_request')
                    ->where('user_request.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------Request End---->
}