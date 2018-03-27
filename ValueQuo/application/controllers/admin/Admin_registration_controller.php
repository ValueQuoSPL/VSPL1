<?php

class Admin_registration_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Admin_registration_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------admin_registration Start---->
    public function admin_registration() {
//        $this->data['data'] = $this->Admin_registration_model->getadmin_registration();
        $this->data['title'] = "Admin_registration";
        $this->data['template'] = "Admin Registration/admin_registration";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Admin_registration"));
        $this->admin_layout($this->data);
    }

    public function edit_admin_registration($id) {
        $this->data['title'] = "Admin_registration";
        $this->data['data'] = $this->Admin_registration_model->getadmin_registration($id);
        $this->data['template'] = "Admin Registration/edit_admin_registration";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Admin Registration"));
        $this->admin_layout($this->data);
    }

    public function save_admin_registration() {
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[ship_admin_user.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->add_admin_registration();
        } else {
            $result = $this->Admin_registration_model->saveadmin_registration();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Added Successfully.', 'type' => 's'));
                redirect('admin/admin_registration');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Not Added.', 'type' => 'e'));
                redirect('admin/add_admin_registration');
            }
        }
    }

    public function update_admin_registration() {
        $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[ship_admin_user.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_admin_registration();
        } else {
            $result = $this->Admin_registration_model->updateadmin_registration($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Updated Successfully.', 'type' => 's'));
                redirect('admin/admin_registration');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Not Updated.', 'type' => 'e'));
                redirect('admin/admin_registration');
            }
        }
    }

    public function delete_admin_registration($id) {
        $result = $this->Admin_registration_model->deleteadmin_registration($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/admin_registration');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Admin Registration Record Not deleted.', 'type' => 'e'));
            redirect('admin/admin_registration');
        }
    }

    public function add_admin_registration() {
        $this->data['title'] = "Admin_registration";
        $this->data['template'] = "Admin Registration/add_admin_registration";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Admin Registration"));
        $this->admin_layout($this->data);
    }

    public function getadmin_registrationdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Admin_registration Details');
        $edit_link = anchor('admin/Admin_registration_controller/edit_admin_registration/$1', '<i class="fa fa-file-text-o"></i> ' . 'Edit');
        $delete_link = anchor('admin/Admin_registration_controller/delete_admin_registration/$1', '<i class="fa fa-trash-o"></i> ' . 'Delete');
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
                    ->select("id,f_name,l_name,username,cust_password,email,phone,gender,status")
                    ->from('admin_user')
                    ->where('group_id', 2);
            $this->db->order_by("admin_user.id", "desc");
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,f_name,l_name,username,email,cust_password,phone,gender,status")
                    ->from('admin_user')
                    ->where('group_id', 2)
                    ->where('ship_admin_user.userby', $this->session->userdata('user_id'));
            $this->db->order_by("admin_user.id", "desc");
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------admin_registration End---->
}
