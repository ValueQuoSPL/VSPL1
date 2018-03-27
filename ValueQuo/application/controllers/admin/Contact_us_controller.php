<?php

class Contact_us_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Contact_us_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------contact_us Start---->
    public function contact_us() {
//        $this->data['data'] = $this->Contact_us_model->getcontact_us();
        $this->data['title'] = "Contact_us";
        $this->data['template'] = "Contact Us/contact_us";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Contact Us"));
        $this->admin_layout($this->data);
    }

    public function edit_contact_us($id) {
        $this->data['title'] = "Contact_us";
        $this->data['data'] = $this->Contact_us_model->getcontact_us($id);
        $this->data['template'] = "Contact Us/edit_contact_us";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Contact Us"));
        $this->admin_layout($this->data);
    }

    public function save_contact_us() {
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact_number', 'Contact_number', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('lat', 'lat', 'required');
        $this->form_validation->set_rules('lng', 'lng', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_contact_us();
        } else {
            $result = $this->Contact_us_model->savecontact_us();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Added Successfully.', 'type' => 's'));
                redirect('admin/contact_us');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Not Added.', 'type' => 'e'));
                redirect('admin/add_contact_us');
            }
        }
    }

    public function update_contact_us() {
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('contact_number', 'Contact_number', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('lat', 'lat', 'required');
        $this->form_validation->set_rules('lng', 'lng', 'required');
        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_contact_us();
        } else {
            $result = $this->Contact_us_model->updatecontact_us($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Updated Successfully.', 'type' => 's'));
                redirect('admin/contact_us');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Not Updated.', 'type' => 'e'));
                redirect('admin/edit_contact_us');
            }
        }
    }

    public function delete_contact_us($id) {
        $result = $this->Contact_us_model->deletecontact_us($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/contact_us');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Contact Us Record Not deleted.', 'type' => 'e'));
            redirect('admin/contact_us');
        }
    }

    public function add_contact_us() {
        $this->data['title'] = "Contact_us";
        $this->data['template'] = "Contact Us/add_contact_us";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Contact Us"));
        $this->admin_layout($this->data);
    }

    public function getcontact_usdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Contact_us Details');
        $edit_link = anchor('admin/Contact_us_controller/edit_contact_us/$1', '<i class="fa fa-file-text-o"></i> ' . 'Edit');
        $delete_link = anchor('admin/Contact_us_controller/delete_contact_us/$1', '<i class="fa fa-trash-o"></i> ' . 'Delete');
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
                    ->select("id,address,email,contact_number,description,lat,lng,status")
                    ->from('contact_detail');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,address,email,contact_number,description,lat,lng,status")
                    ->from('contact_detail')
                    ->where('contact_detail.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------contact_us End---->
}
