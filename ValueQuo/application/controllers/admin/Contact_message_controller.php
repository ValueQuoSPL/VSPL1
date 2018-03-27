<?php

class Contact_message_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Contact_message_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------contact_message Start---->
    public function contact_message() {
//        $this->data['data'] = $this->Contact_message_model->getcontact_message();
        $this->data['title'] = "Contact_message";
        $this->data['template'] = "Contact Message/contact_message";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Contact Message"));
        $this->admin_layout($this->data);
    }

    public function edit_contact_message($id) {
        $this->data['title'] = "Contact_message";
        $this->data['data'] = $this->Contact_message_model->getcontact_message($id);
        $this->data['template'] = "Contact Message/edit_contact_message";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Contact Message"));
        $this->admin_layout($this->data);
    }

    public function save_contact_message() {
       $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
$this->form_validation->set_rules('	message', '	message', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_contact_message();
        } else {
            $result = $this->Contact_message_model->savecontact_message();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Added Successfully.', 'type' => 's'));
                redirect('admin/contact_message');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Not Added.', 'type' => 'e'));
                redirect('admin/add_contact_message');
            }
        }
    }

    public function update_contact_message() {
        $this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
$this->form_validation->set_rules('	message', '	message', 'required');

        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_contact_message();
        } else {
            $result = $this->Contact_message_model->updatecontact_message($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Updated Successfully.', 'type' => 's'));
                redirect('admin/contact_message');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Not Updated.', 'type' => 'e'));
                redirect('admin/edit_contact_message');
            }
        }
    }

    public function delete_contact_message($id) {
        $result = $this->Contact_message_model->deletecontact_message($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/contact_message');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Message Record Not deleted.', 'type' => 'e'));
            redirect('admin/contact_message');
        }
    }

    public function add_contact_message() {
        $this->data['title'] = "Contact_message";
        $this->data['template'] = "Contact Message/add_contact_message";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Contact Message"));
        $this->admin_layout($this->data);
    }

    public function getcontact_messagedata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Contact_message Details');
//        $edit_link = anchor('admin/Contact_message_controller/edit_contact_message/$1', '<i class="fa fa-file-text-o"></i> ' . 'Edit');
        $delete_link = anchor('admin/Contact_message_controller/delete_contact_message/$1', '<i class="fa fa-trash-o"></i> ' . 'Delete');
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
                    ->select("id,name,email,mobile,	message,status")
                    ->from('registration');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,name,email,mobile,	message,status")
                    ->from('registration')
                    ->where('registration.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------contact_message End---->
}