<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->library('session');
        define("BASEURL", base_url());
        define("SITEURL", site_url());
        define("ASSETSURL", base_url('assets'));
        define("USERASSETS", base_url() . "assets/user/");
        define("ADMINASSETS", base_url("assets/admin/"));
        define('ANGULARURL', base_url() . 'angular-js/');
        define('IMGURL', base_url() . 'assets/img/');
//        Created by akash for user images 7 aug 017
        define('USERIMG', base_url() . 'assets/user/img/');
        define('SITENAME', "Universal");
//        $this->load->helper('xcrud');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('Functional_model', 'functional');
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
        $this->loggedIn = $this->ion_auth->logged_in();
    }

   public function functional_layout($data) {
               
       // $temp['searchResult'] = $this->functional->getSearchResult();
       // $temp['profile'] = $this->functional->getProfileData();
       $temp['data'] = $data;
       $temp['title'] = ucfirst($data['template']);
       $this->load->view('user/layout/index', $temp);
   }

    public function admin_layout($data) {

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
        $this->data['menus'] = $this->site_model->getMenus();
//        $this->data['hscode'] = $this->site_model->getHsCode();
        $this->data['data'] = $data;
        $this->data['title'] = ucfirst($data['template']);
        $this->load->view('admin/layout/index', $this->data);
    }

    public function admin_other_layout($data) {
        $this->data['data'] = $data;
        $this->data['title'] = ucfirst($data['template']);
        $this->load->view('admin/register');
    }

    public function admin_reset_password_layout($data) {
        $this->data['data'] = $data;
        $this->data['title'] = ucfirst($data['template']);
        $this->load->view('admin/resetPassword');
    }

    public function genrate($data, $mode = "save") {
        if ($mode == "save") {
            $extract_folder = FCPATH . "/application/config";
            $route = file_get_contents($extract_folder . "/routes.php");
            $ftable = fopen($extract_folder . "/routes.php", "w+");
            $ex = explode("/", $data['url']);
            $route.= "\n//-----{$ex[count($ex) - 1]} Start-----//\n";
            $route.= "\$route['{$data['url']}'] = 'admin/{$data['controller']}/{$ex[count($ex) - 1]}';\n";
            $route.= "\$route['admin/add_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/add_{$ex[count($ex) - 1]}';\n";
            $route.= "\$route['admin/save_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/save_{$ex[count($ex) - 1]}';\n";
            $route.= "\$route['admin/update_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/update_{$ex[count($ex) - 1]}';\n";
            $route.= "//-----{$ex[count($ex) - 1]} End-----//\n";
            fwrite($ftable, $route);
            fclose($ftable);
            $this->controllers($data, "save");
            $this->models($data, "save");
            $this->createviews($data, "save");
        } else if ($mode == "update") {
            $extract_folder = FCPATH . "/application/config";
            $route = file_get_contents($extract_folder . "/routes.php");
            $ex = explode("/", $data['url']);
            $ftable = fopen($extract_folder . "/routes.php", "w+");
            $f = strpos($route, "//-----{$ex[count($ex) - 1]} Start-----//");
            $d = strpos($route, "//-----{$ex[count($ex) - 1]} End-----//");
            $str = "";
            for ($x = $f; $x <= ($d + strlen("/-----{$ex[count($ex) - 1]} End-----//")); $x++) {
                $str.=$route[$x];
            }
//            die();
//            $ex = explode("/", $data['url']);
            $r = "//-----{$ex[count($ex) - 1]} Start-----//\n";
            $r.= "\$route['{$data['url']}'] = 'admin/{$data['controller']}/{$ex[count($ex) - 1]}';\n";
            $r.= "\$route['admin/add_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/add_{$ex[count($ex) - 1]}';\n";
            $r.= "\$route['admin/save_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/save_{$ex[count($ex) - 1]}';\n";
            $r.= "\$route['admin/update_{$ex[count($ex) - 1]}'] = 'admin/{$data['controller']}/update_{$ex[count($ex) - 1]}';\n";
            $r.= "//-----{$ex[count($ex) - 1]} End-----//\n";
            $route = str_replace($str, $r, $route);
//            echo "<pre>";
//            print_r($route);
//            echo "</pre>";
//            die();
            fwrite($ftable, $route);
            fclose($ftable);
        }
    }

    public function controllers($data, $mode = "save") {
        $controlreplace = array('{menu_name}', '{template_name_list}', '{name}', '{template_name_edit}', '{model_name}', '{template_name_add}', '{controller_name}', '{table_fields}', '{table_name}', '{table_userby_filed}', '{add_rules}', '{edit_rules}', '{url}');
        $extract_folder = FCPATH . "application/controllers";
        $controller = "";
        $ctrl = scandir(FCPATH . "/application/controllers/admin");
        if (!in_array("{$data['controller']}.php", $ctrl)) {
            $newctrl = file_get_contents(FCPATH . "application/libraries/adminlib/newcontroller.txt");
            $c = fopen($extract_folder . "/admin/{$data['controller']}.php", "w");
            $newrep = array('{controller_name}', '{model_name}');
            $p = array("{$data['controller']}", "{$data['model']}");
            $newctrl = str_replace($newrep, $p, $newctrl);
            fwrite($c, $newctrl);
            fclose($c);
            $controller = file_get_contents($extract_folder . "/admin/{$data['controller']}.php");
        } else {
            $controller = file_get_contents($extract_folder . "/admin/{$data['controller']}.php");
            $controller = preg_replace('/[\r\n]+/', "\n", $controller);
            $controller = preg_replace('/[ \t]+/', ' ', $controller);
            $controller = substr($controller, 0, strlen($controller) - 2);
        }
//        echo $controller[strlen($controller) - 2];
        $controllertemplate = file_get_contents(FCPATH . "application/libraries/adminlib/controller.txt");
        $ex = explode("/", $data['url']);
        $data['table_name'] = str_replace($this->db->dbprefix, "", $data['table_name']);
        $fields = explode(",", $data['fields']);
        $add_rules = "";
        foreach ($fields as $f) {
            if ($f != "id" && $f != "create_date" && $f != "modify_date" && $f != "status" && $f != "userby") {
                $add_rules.="\$this->form_validation->set_rules('{$f}', '" . ucfirst($f) . "', 'required');\n";
            }
        }
        $param = array(
            "{$ex[count($ex) - 1]}",
            $data['template_name'] . "/" . $ex[count($ex) - 1],
            ucwords($ex[count($ex) - 1]),
            $data['template_name'] . "/edit_" . $ex[count($ex) - 1],
            $data['model'],
            $data['template_name'] . "/add_" . $ex[count($ex) - 1],
            $data['controller'],
            $data['fields'],
            $data['table_name'],
            $data['table_userby_name'],
            $add_rules,
            $add_rules,
            $data['url']
        );
        $controllertemplate = str_replace($controlreplace, $param, $controllertemplate);
        $ftable = fopen($extract_folder . "/admin/{$data['controller']}.php", "w+");
        $controller.="\n" . $controllertemplate . "\n}";
        fwrite($ftable, $controller);
        fclose($ftable);
    }

    public function models($data, $mode = "save") {
        $controlreplace = array('{menu_name}', '{table_name}', '{post_fields}', '{list_fields}');
        $extract_folder = FCPATH . "application/models";
        $controller = "";

        $controller = "";
        $ctrl = scandir(FCPATH . "/application/models/admin");
        if (!in_array("{$data['model']}.php", $ctrl)) {
            $c = fopen($extract_folder . "/admin/{$data['model']}.php", "w");
            $newctrl = file_get_contents(FCPATH . "application/libraries/adminlib/newmodel.txt");
            $newrep = array('{model_name}');
            $p = array("{$data['model']}");
            $newctrl = str_replace($newrep, $p, $newctrl);
            fwrite($c, $newctrl);
            fclose($c);
            $controller = file_get_contents($extract_folder . "/admin/{$data['model']}.php");
        } else {
            $controller = file_get_contents($extract_folder . "/admin/{$data['model']}.php");
            $controller = preg_replace('/[\r\n]+/', "\n", $controller);
            $controller = preg_replace('/[ \t]+/', ' ', $controller);
            $controller = substr($controller, 0, strlen($controller) - 2);
        }
//        echo $controller[strlen($controller) - 2];
        $controllertemplate = file_get_contents(FCPATH . "application/libraries/adminlib/model.txt");
        $ex = explode("/", $data['url']);
        $data['table_name'] = str_replace($this->db->dbprefix, "", $data['table_name']);
        $fields = explode(",", $data['fields']);
        $post_fields = "";
        foreach ($fields as $f) {
            if ($f != "id" && $f != "create_date" && $f != "modify_date" && $f != "status" && $f != "userby") {
                $post_fields.="'{$f}'=>\$this->input->post('{$f}'),\n";
            }
        }
        $param = array(
            "{$ex[count($ex) - 1]}",
            $data['table_name'],
            $post_fields,
            $data['fields'],
        );
        $controllertemplate = str_replace($controlreplace, $param, $controllertemplate);
        $ftable = fopen($extract_folder . "/admin/{$data['model']}.php", "w+");
        $controller.="\n" . $controllertemplate . "\n}";
        fwrite($ftable, $controller);
        fclose($ftable);
    }

    public function createviews($data, $mode = "save") {
        $data['table_name'] = str_replace($this->db->dbprefix, "", $data['table_name']);
        $ex = explode("/", $data['url']);
        $viewIndexReplace = array('{controller_name}', '{menu_name}', '{columns_null}', '{status_no}', '{table_name}', '{name}', '{table_col}');
        $viewAddReplace = array('{menu_name}', '{input_content}', '{url}');
        $viewEditReplace = array('{menu_name}', '{input_content}', '{url}');
        $extract_folder = FCPATH . "application/views/admin/{$data['template_name']}";
        if (!is_dir(FCPATH . "application/views/admin/{$data['template_name']}")) {
            mkdir(FCPATH . "application/views/admin/{$data['template_name']}");
        }
        $viewIndex = "";
        $viewAdd = "";
        $viewEdit = "";

//        Create Index
        $viewI = fopen($extract_folder . "/{$ex[count($ex) - 1]}.php", "w");
        $newctrl = file_get_contents(FCPATH . "application/libraries/adminlib/view/index.txt");
        $col_ar = explode(",", $data['fields']);
        $col = "";
        $status_no = 0;
        $tab_col = "";
        foreach ($col_ar as $c) {
            if ($c != "id" && $c != "status") {
                $col.= "{'mRender': null},";
                $status_no++;
            }
            if ($c != "id") {
                $tab_col.="<th>" . ucfirst($c) . "</th>";
            }
        }
        $viewI_param = array(
            "{$data['controller']}",
            "{$ex[count($ex) - 1]}",
            $col,
            $status_no + 1,
            $data['table_name'],
            $data['name'],
            $tab_col
        );
        $newIndex = str_replace($viewIndexReplace, $viewI_param, $newctrl);
        fwrite($viewI, $newIndex);
        fclose($viewI);
//        Create Index
//        
//        Create Add
        $viewA = fopen($extract_folder . "/add_{$ex[count($ex) - 1]}.php", "w");
        $newctrl = file_get_contents(FCPATH . "application/libraries/adminlib/view/add.txt");
        $col_ar = explode(",", $data['fields']);
        $col = "";
        $status_no = 0;
        $tab_col = "";
        foreach ($col_ar as $c) {
            if ($c != "id" && $c != "status") {
                $col.= '<section  class="col col-6">
                                <label class="label">' . ucfirst($c) . '</label>
                                    <label class="input">
                                <input type="text" class="input-sm" id="' . $c . '" value="<?php echo set_value(\'' . $c . '\', \'\'); ?>"  placeholder="Name" name="' . $c . '" >
                                <span class="error"><?php echo form_error(\'' . $c . '\'); ?></span>
                               </label>
                                            </section>';
            }
        }





        $viewA_param = array(
            "{$ex[count($ex) - 1]}",
            $col,
            $data['url'],
        );
        $newAdd = str_replace($viewAddReplace, $viewA_param, $newctrl);
        fwrite($viewA, $newAdd);
        fclose($viewA);
//        Create Add
        //        Create Add
        $viewE = fopen($extract_folder . "/edit_{$ex[count($ex) - 1]}.php", "w");
        $newctrl = file_get_contents(FCPATH . "application/libraries/adminlib/view/edit.txt");
        $col_ar = explode(",", $data['fields']);
        $col = "";
        $status_no = 0;
        $tab_col = "";
        foreach ($col_ar as $c) {
            if ($c != "id" && $c != "status") {
                $col.= '<section  class="col col-6">
                                <label class="label">' . ucfirst($c) . '</label>
                                     <label class="input">
                                <input type="text" class="input-sm" id="' . $c . '" value="<?php echo setValue(set_value(\'' . $c . '\'),$data->' . $c . '); ?>"  placeholder="Name" name="' . $c . '" >
                                <span class="error"><?php echo form_error(\'' . $c . '\'); ?></span>
                            </label>
                                            </section>';
            }
        }
        $viewE_param = array(
            "{$ex[count($ex) - 1]}",
            $col,
            $data['url'],
        );
        $newEdit = str_replace($viewEditReplace, $viewE_param, $newctrl);
        fwrite($viewE, $newEdit);
        fclose($viewE);
//        Create Add
    }

    function sendMail($to, $sub, $msg, $from_name = "Support@linosys.net", $from = "info@linosys.net") {

        $this->load->library('phpmailer/Pmailer');
        $mail = $this->pmailer->getMailer();

        $mail->setFrom("$from", "$from_name");
        $mail->addReplyTo("$from", "$from_name");

        $mail->addAddress($to);  // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "$sub";
        $mail->Body = "$msg";

        if (!$mail->send()) {
            return array('s' => 0, 'err' => $mail->ErrorInfo);
        } else {
            return array('s' => 1, 'err' => "");
        }
    }

}
