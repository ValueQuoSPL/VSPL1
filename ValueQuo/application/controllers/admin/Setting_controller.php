<?php

class Setting_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Setting_model');
// $this->load->library('form_validation');
// $this->load->helper('message');
        //$this->load->model('site_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->load->library('upload');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------City Start---->
    public function City() {
        $this->data['title'] = "City";
        $this->data['template'] = "City/City";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "City"));
        $this->admin_layout($this->data);
    }

    public function edit_City($id) {
        $this->data['title'] = "City";
        $this->data['data'] = $this->Setting_model->getCity($id);
        $this->data['template'] = "City/edit_City";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit City"));
        $this->admin_layout($this->data);
    }

    public function save_City() {
        $this->form_validation->set_rules('city_name', 'City_name', 'required');
        $this->form_validation->set_rules('state_id', 'State_id', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_City();
        } else {
            $result = $this->Setting_model->saveCity();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Added Successfully.', 'type' => 's'));
                redirect('admin/City');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Not Added.', 'type' => 'e'));
                redirect('admin/add_City');
            }
        }
    }

    public function update_City() {
        $this->form_validation->set_rules('city_name', 'City_name', 'required');
        $this->form_validation->set_rules('state_id', 'State_id', 'required');
        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_City();
        } else {
            $result = $this->Setting_model->updateCity($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Updated Successfully.', 'type' => 's'));
                redirect('admin/City/City');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Not Updated.', 'type' => 'e'));
                redirect('admin/edit_City');
            }
        }
    }

    public function delete_City($id) {
        $result = $this->Setting_model->deleteCity($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Record Deleted Succesfully.', 'type' => 's'));
            redirect('admin/City');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'City Record Not deleted.', 'type' => 'e'));
            redirect('admin/City');
        }
    }

    public function add_City() {
        $this->data['title'] = "City";
        $this->data['template'] = "City/add_City";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add City"));
        $this->admin_layout($this->data);
    }

    public function getCitydata() {
        $this->load->library('datatables');
// $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'City Details');
        $edit_link = anchor('admin/Setting_controller/edit_City/$1', '<i class="fa fa-file-text-o"></i> ' . 'City Edit');
        $delete_link = anchor('admin/Setting_controller/delete_City/$1', '<i class="fa fa-trash"></i> ' . 'City Delete');
        $action = '<div class="text-center"><div class="btn-group text-left">'
                . '<button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">'
                . 'Actions' . ' <i style="color:#fff" class="fa fa-caret-down"></i></button>
 <ul class="dropdown-menu pull-right" role="menu">
 <li>' . $edit_link . '</li>
 <li>' . $delete_link . '</li>
 </ul>
 </div></div>';
        $result = $this->Setting_model->get_UserGroup();
        if ($result->group_id == 1) {
            $this->datatables
                    ->select("id,city_name,state_id,status")
                    ->from('city');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,city_name,state_id,status")
                    ->from('city')
                    ->where('city.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------City End---->
// <------Faq Start---->
    public function Faq() {
//        $this->data['data'] = $this->Setting_model->getFaq();
        $this->data['title'] = "Faq";
        $this->data['template'] = "Faq/Faq";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Faq"));
        $this->admin_layout($this->data);
    }

    public function edit_Faq($id) {
        $this->data['title'] = "Faq";
        $this->data['data'] = $this->Setting_model->getFaq($id);
        $this->data['template'] = "Faq/edit_Faq";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Faq"));
        $this->admin_layout($this->data);
    }

    public function save_Faq() {
        $this->form_validation->set_rules('faq_question', 'Faq_question', 'required');
        $this->form_validation->set_rules('faq_ans', 'Faq_ans', 'required');

        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->add_Faq();
        } else {
            $result = $this->Setting_model->saveFaq();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Added Successfully.', 'type' => 's'));
                redirect('admin/Faq');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Not Added.', 'type' => 'e'));
                redirect('admin/add_Faq');
            }
        }
    }

    public function update_Faq() {
        $this->form_validation->set_rules('faq_question', 'Faq_question', 'required');
        $this->form_validation->set_rules('faq_ans', 'Faq_ans', 'required');

        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_Faq();
        } else {
            $result = $this->Setting_model->updateFaq($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Updated Successfully.', 'type' => 's'));
                redirect('admin/Faq/Faq');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Not Updated.', 'type' => 'e'));
                redirect('admin/edit_Faq');
            }
        }
    }

    public function delete_Faq($id) {
        $result = $this->Setting_model->deleteFaq($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/Faq');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Faq Record Not deleted.', 'type' => 'e'));
            redirect('admin/Faq');
        }
    }

    public function add_Faq() {
        $this->data['title'] = "Faq";
        $this->data['template'] = "Faq/add_Faq";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Faq"));
        $this->admin_layout($this->data);
    }

    public function getFaqdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Faq Details');
        $edit_link = anchor('admin/Setting_controller/edit_Faq/$1', '<i class="fa fa-file-text-o"></i> ' . 'Faq Edit');
        $delete_link = anchor('admin/Setting_controller/delete_Faq/$1', '<i class="fa fa-trash"></i> ' . 'Faq Delete');
        $action = '<div class="text-center"><div class="btn-group text-left">'
                . '<button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">'
                . 'Actions' . ' <i style="color:#fff" class="fa fa-caret-down"></i></button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>' . $edit_link . '</li>
			<li>' . $delete_link . '</li>
			</ul>
		</div></div>';
        $result = $this->Setting_model->get_UserGroup();
        if ($result->group_id == 1) {
            $this->datatables
                    ->select("id,faq_question,faq_ans,status")
                    ->from('faq');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,faq_question,faq_ans,status")
                    ->from('faq')
                    ->where('faq.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------Faq End---->
}
