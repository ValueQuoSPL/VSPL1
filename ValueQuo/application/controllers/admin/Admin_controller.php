<?php

class Admin_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Admin_model');
        $this->load->library('form_validation');
        $this->load->helper('message');
        $this->load->model('site_model');
        $this->load->helper(array('url', 'form'));
        $this->load->library('session');
        $this->data['filters'] = $this->session->userdata('filters');
    }

    public function dashboard() {
        $this->data['title'] = "Dashboard";
        $this->data['template'] = "dashboard";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Dashboard"));
        $this->admin_layout($this->data);
    }

    public function menus() {
        $this->data['title'] = "Menus";
        $this->data['template'] = "Menus/menus";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Menus"));
        $this->admin_layout($this->data);
    }

    public function menus_add() {
        $this->data['title'] = "Menus";
        $this->data['parent'] = $this->Admin_model->getAdminMenus();
        $this->data['template'] = "Menus/menus_add";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Menus Add"));
        $this->admin_layout($this->data);
    }

    public function menus_save() {
        $this->form_validation->set_rules('name', 'Name', 'required|is_unique[admin_menu.name]');
//        $this->form_validation->set_rules('url', 'URL', 'required');
//        $this->form_validation->set_rules('icon', 'Icon', 'required');
//        $this->form_validation->set_rules('parent_id', 'Parent Menu', 'required');
        $this->form_validation->set_rules('controller', 'Controller Name', 'required');
        $this->form_validation->set_rules('model', 'Model Name', 'required');
        $this->form_validation->set_rules('template_name', 'Template Name', 'required');
        $this->form_validation->set_rules('fields', 'Fields', 'required');
        $this->form_validation->set_rules('table_userby_name', 'Table userby name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->menus_add();
        } else {
            $_POST['create_date'] = date('Y-m-d h:i:s');
            $_POST['created_by'] = $this->session->userdata('user_id');
            $data = $_POST;
            $result = $this->Admin_model->saveMenu($_POST);
            if ($result == true) {
                if ($data['parent_id'] != 0) {
                    $this->genrate($data);
                }
                $this->session->set_flashdata('message', array('title' => 'Success.', 'content' => 'Menu Added Successfully.', 'type' => 's'));
                redirect(site_url() . 'admin/menus');
            } else {
                $this->session->set_flashdata('message', array('title' => 'Error.', 'content' => 'Menu Adding Failed.', 'type' => 'e'));
                redirect(site_url() . 'admin/menus');
            }
        }
    }

    public function menus_update($id) {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('parent_id', 'Parent Menu', 'required');
        $this->form_validation->set_rules('controller', 'Controller Name', 'required');
        $this->form_validation->set_rules('model', 'Model Name', 'required');
        $this->form_validation->set_rules('template_name', 'Template Name', 'required');
        $this->form_validation->set_rules('fields', 'Fields', 'required');
        $this->form_validation->set_rules('fields', 'Fields', 'required');
        $this->form_validation->set_rules('table_userby_name', 'Table userby name', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->menus_edit($id);
        } else {
            $data = $_POST;
            unset($_POST['id']);
            $result = $this->Admin_model->updateAdminMenu($_POST, $id);
            if ($result == true) {
                $this->genrate($data);
// $this->genrate($data, 'update');
                $this->session->set_flashdata('message', array('title' => 'Success.', 'content' => 'Menu Updated Successfully.', 'type' => 's'));
                redirect(site_url() . 'admin/menus');
            } else {
                $this->session->set_flashdata('message', array('title' => 'Error.', 'content' => 'Menu Updating Failed.', 'type' => 'e'));
                redirect(site_url() . 'admin/menus');
            }
        }
    }

    public function getMenusData() {
        $edit_link = anchor('admin/Menus-edit/$1', '<i class="fa fa-file-text-o"></i> ' . 'Menu edit');
// $delete_link = anchor('admin/Admin_controller/system_user_edit/$1', '<i class="fa fa-trash"></i> ' . 'Menu Delete');
//        $action = '<div class="text-center"><div class="btn-group text-left">'
//                . '<button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">'
//                . 'Actions' . ' <i style="color:#fff" class="fa fa-caret-down"></i></button>
// <ul class="dropdown-menu pull-right" role="menu">
// <li>' . $edit_link . '</li>
// </ul>
// </div></div>';
        $this->load->library('datatables');
        $a = $this->db->dbprefix('admin_menu');
        $this->datatables
                ->select("$a.id,$a.name,$a.url,$a.icon,p.name as parent_name,$a.status", false)
                ->from("admin_menu")
                ->join("admin_menu p", "admin_menu.parent_id=p.id", "left");
        $this->datatables->add_column("Actions", $action, "$a.id");
        echo $this->datatables->generate();
    }

    public function menus_edit($id) {
        $this->data['title'] = "Menus";
        $this->data['parent'] = $this->Admin_model->getAdminMenus();
        $this->data['menu'] = $this->Admin_model->getAdminMenu($id);

        $this->data['id'] = $id;
        $this->data['template'] = "Menus/menus_edit";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Menu Edit"));
        $this->admin_layout($this->data);
    }

    public function bulkDelete() {
        $key = $_POST['key'];
        $val = $_POST['val'];
        $table = $_POST['tab'];
        $r = $this->site_model->bulkDelete($key, $val, $table);
        if ($r) {
            echo json_encode(array('status' => 1));
        } else {
            echo json_encode(array('status' => 0));
        }
    }

    public function exceldownload() {
        $key = $_GET['key'];
        $val = $_GET['val'];
        $table = $_GET['tab'];
// $r = $this->site_model->exceldownload($val, $table);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "export.csv";
        $this->db->where_in($key, $val);
        $result = $this->db->get($table);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function setStatus() {
        $key = $_POST['key'];
        $id = $_POST['id'];
        $table = $_POST['tab'];
        $r = $this->site_model->setStatus($key, $id, $table);
        if ($r) {
            echo json_encode(array('status' => 1));
        } else {
            echo json_encode(array('status' => 0));
        }
    }

    public function setAStatus() {
        $key = $_POST['key'];
        $id = $_POST['id'];
        $table = $_POST['tab'];
        $key_id = $table . '.' . $key;
        $r = $this->site_model->setAStatus($key, $id, $table);
        if ($r) {
            $this->db->select('*');
            $this->db->from($table); //->from($table)->where($key, $id)->get()->row();
            $this->db->where($key_id, $id);
            $status1 = $this->db->get()->row();

            $to = $status1->email;
            $d['fname'] = $status1->f_name;
            $d['lname'] = $status1->l_name;
            $d['email'] = $status1->email;
            $d['status'] = $status1->status;
            if ($d['status'] == 'Active') {
                $msg = $this->load->view('emails/accountActive', $d, True);
                $e = $this->sendMail($to, "Welcome To Shipment", $msg, "Shipment", "support@linosys.net");
             
            } else {
                $msg = $this->load->view('emails/accountDeactive', $d, True);
                $e = $this->sendMail($to, "Welcome To Shipment", $msg, "Shipment", "support@linosys.net");
               
            }

            echo json_encode(array('status' => 1));
        } else {
            echo json_encode(array('status' => 0));
        }
    }

    public function setCStatus() {
// $r = $this->updateStatus();

        $key = $_POST['key'];
        $id = $_POST['id'];
        $table = $_POST['tab'];

        $j = "'admin_user.id = $table.doctor_id'";


        $select = $table . '.*' . 'admin_user.*';
        $key_id = $table . '.' . $key;


        $r = $this->site_model->setStatus($key, $id, $table);
        if ($r) {
            $this->db->select('*');
            $this->db->from($table); //->from($table)->where($key, $id)->get()->row();
            $this->db->where($key_id, $id);
            $status1 = $this->db->get()->row();
            if ($status1->status == "Active" && $table == "appointment") {
                $this->db->select('*');
                $this->db->from($table); //->from($table)->where($key, $id)->get()->row();
                $this->db->join('admin_user', 'appointment.doctor_id = admin_user.id');
                $this->db->where($key_id, $id);
                $status2 = $this->db->get()->row();
                $message = "Dear " . $status2->patient_name . ". You succesfully completed your treatement with Dr." . $status2->f_name . " " . $status2->l_name . " -" . $status2->location . " -Review your doctor at Plus100Years-Thanks";
                ;

                $subject = "Plus100years Appointment";
                $content = "Dear " . $status2->patient_name . ",<br />" . " You succesfully completed your treatement with Dr." . $status2->f_name . " " . $status2->l_name . " -" . $status2->location . " -Review your doctor at Plus100Years-Thanks";
                $this->sendMail($status1->email, $subject, $content, "info@plus100years.com");
                if ($this->smssend($status1->phone, $message)) {
                    echo json_encode(array('status' => 1));
                }
            } else {
// echo "Active";
                echo json_encode(array('status' => 1));
            }
        } else {
            echo json_encode(array('status' => 0));
        }
    }

    public function register() {
        $this->data['title'] = "Register";
        $this->data['template'] = "register";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "Dashboard"));
        $this->admin_other_layout($this->data);
    }

    public function resetPassword($id = NULL) {

        $this->data['details'] = $this->Admin_model->getpasswordInfo($id);

        $this->data['title'] = "Reset Password";
        $this->data['template'] = "resetPassword";
        $this->data['bc'] = array(array('link' => site_url('admin'), 'page' => "Home"), array('link' => '#', 'page' => "resetPassword"));

        $this->admin_reset_password_layout($this->data);
    }

    public function insertSignUpData() {
        $rs = $this->Admin_model->registrationData();
        if ($rs) {
            echo json_encode(array('status' => '1', 'state' => '1', 'msg' => 'You Have Registered Successfully.'));
        } else {
            echo json_encode(array('status' => '0'));
        }

        $to = $_POST['email'];
        $d['userdetails'] = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['mobile'],
            'f_name' => $_POST['first_name'],
            'l_name' => $_POST['last_name'],
        );

        $msg = $this->load->view('emails/admin_registration', $d, True);
        $e = $this->sendMail($to, "Welcome To Shipment", $msg, "Shipment", "support@linosys.net");
        $toadmin = 'testing.linosys@gmail.com';
        $msgAdmin = $this->load->view('emails/subadmin_reg_mail_to_super_admin', $toadmin, True);
        $e = $this->sendMail($toadmin, "Welcome To Shipment", $msgAdmin, "Shipment", "support@linosys.net");
    }

    public function getUserType() {
        $rs = $this->Admin_model->getUserType();
        echo json_encode($rs);
    }

    public function getCompanyName($id) {
        $rs = $this->Admin_model->getCompanyName($id);
        echo json_encode($rs);
    }

    public function getCountryData() {
        $rs = $this->Admin_model->getCountryData();
        echo json_encode($rs);
    }

    public function getStateData($id) {
        $rs = $this->Admin_model->getStateData($id);
        echo json_encode($rs);
    }

    public function getCityData($id) {
        $rs = $this->Admin_model->getCityData($id);
        echo json_encode($rs);
    }

    public function getForgotPassword() {
        $rs = $this->Admin_model->getForgotPassword();
        if (count($rs) != 0) {
            $row = $rs[0];
            $to = $_POST['email'];
            $d['userdetails'] = array(
                'id' => $rs[0]->id,
                'email' => $_POST['email'],
                'password' => $row->password
            );
            $d['email'] = $_POST['email'];
            $d['pwd'] = $row->password;
            $d['user_id'] = $row->id;
            $msg = $this->load->view('emails/forgotPassword', $d, True);
            $e = $this->sendMail($to, "Forgot Password Request Approved", $msg, "Forgot Password", "support@linosys.net");
            $this->session->set_flashdata('forgotp', 'Please Check Your Email To Reset Your Password.');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('forgotp', 'Email does not exist.Please enter valid Email.');
            redirect('auth/login');
        }
    }

    public function getChangePassword($id) {
        $rs = $this->Admin_model->getChangePassword($_POST);
        if ($rs == 1) {
            $this->session->set_flashdata('resetPasswordonheader', 'Your password Reset successfully.');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('resetPasswordonheader', 'Your password not changed.');
            redirect('reset-password/' . $id);
        }
    }

    public function getUniqueId() {

        $email = implode($_POST);

        $rs = $this->Admin_model->getUniqueId($email);
        if ($rs == 1) {
            echo json_encode(array('status' => '1', 'msg' => 'Email already exist in database.'));
        } else {
            echo json_encode(array('status' => '0'));
        }
    }

    public function getStatesdata($id) {
        $rs = $this->Admin_model->getStatesdata($id);
        echo json_encode($rs);
    }

    public function getCitiesData($id) {
        $rs = $this->Admin_model->getCitiesData($id);
        if ($rs) {
            echo json_encode($rs);
        } else {
            echo json_encode(array('status' => '0'));
        }
    }

}
