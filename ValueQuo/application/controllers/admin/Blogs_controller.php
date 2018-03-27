<?php

class Blogs_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Blogs_model');
        $this->load->model('admin/Setting_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

// <------blogs Start---->
    public function blogs() {
//        $this->data['data'] = $this->Blogs_model->getblogs();
        $this->data['title'] = "Blogs";
        $this->data['template'] = "blogs/blogs";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Blogs"));
        $this->admin_layout($this->data);
    }

    public function edit_blogs($id) {
        $this->data['title'] = "Blogs";
        $this->data['data'] = $this->Blogs_model->getblogs($id);
        $this->data['template'] = "blogs/edit_blogs";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Edit Blogs"));
        $this->admin_layout($this->data);
    }

    public function save_blogs() {
     
//        $this->form_validation->set_rules('title', 'Title', 'required');
//        $this->form_validation->set_rules('description', 'Description', 'required');
////        $this->form_validation->set_rules('image', 'Image', 'required');
//
//        $this->form_validation->set_rules('status', 'Status', 'required');
//        if ($this->form_validation->run() == FALSE) {
//            $this->add_blogs();
//        } else {
            $result = $this->Blogs_model->saveblogs();
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Added Successfully.', 'type' => 's'));
                redirect('admin/blogs');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Not Added.', 'type' => 'e'));
                redirect('admin/add_blogs');
            }
//        }
    }

    public function update_blogs() {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');

        $this->form_validation->set_rules('status', ' Status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->edit_blogs();
        } else {
            $result = $this->Blogs_model->updateblogs($_POST);
            if ($result == true) {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Updated Successfully.', 'type' => 's'));
                redirect('admin/blogs');
            } else {
                $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Not Updated.', 'type' => 'e'));
                redirect('admin/edit_blogs');
            }
        }
    }

    public function delete_blogs($id) {
        $result = $this->Blogs_model->deleteblogs($id);
        if ($result == true) {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Record  Deleted Succesfully.', 'type' => 's'));
            redirect('admin/blogs');
        } else {
            $this->session->set_flashdata('message', array('title' => '', 'content' => 'Blogs Record Not deleted.', 'type' => 'e'));
            redirect('admin/blogs');
        }
    }

    public function add_blogs() {
        $this->data['title'] = "Blogs";
        $this->data['template'] = "blogs/add_blogs";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Add Blogs"));
        $this->admin_layout($this->data);
    }

    public function getblogsdata() {
        $this->load->library('datatables');
//        $detail_link = anchor('forms/view/$1', '<i class="fa fa-file-text-o"></i> ' . 'Blogs Details');
        $edit_link = anchor('admin/Blogs_controller/edit_blogs/$1', '<i class="fa fa-file-text-o"></i> ' . 'Blogs Edit');
        $delete_link = anchor('admin/Blogs_controller/delete_blogs/$1', '<i class="fa fa-trash-o"></i> ' . 'Blogs Delete');
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
                    ->select("id,title,description,image,status")
                    ->from('blogs');
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        } else {
            $this->datatables
                    ->select("id,title,description,image,status")
                    ->from('blogs')
                    ->where('blogs.userby', $this->session->userdata('user_id'));
            $this->datatables->add_column("Actions", $action, "id");
            echo $this->datatables->generate();
        }
    }

// <------blogs End---->
}
