<?php

class FunctionalController extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Functional_model', 'functional');
        $this->load->library('googlemaps');
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('common_helper');
        $this->load->helper('download');
//        $params['apikey'] = 'AIzaSyDv97kUC0RtCxaM8PAVGFK5Wo2c2Kch9g8';
//        $this->load->library('youtube', $params);
//        $this->youtube->getMostViewedVideoFeed(array('max-results'=>30));
        $current_date = date('Y-m-d');
        $current_timestamp = date('Y-m-d h:m:s');
    }

    public function index() {
        $data['template'] = 'index';
        $data['title'] = 'index';
        $this->functional_layout($data);
    }

    public function home() {
        $data['template'] = 'home';
        $data['title'] = 'home';
        $this->functional_layout($data);
    }
    public function aboutus() {
        $data['template'] = 'about';
        $data['title'] = 'about';
        $this->functional_layout($data);
    }
    public function myservices() {
        $data['template'] = 'services';
        $data['title'] = 'services';
        $this->functional_layout($data);
    }
    public function contactus() {
        $data['template'] = 'contact';
        $data['title'] = 'contact';
        $this->functional_layout($data);
    }
    public function blogs() {
        $data['template'] = 'blogs';
        $data['title'] = 'blogs';
        $this->functional_layout($data);
    }
    public function login() {
        $data['template'] = 'login';
        $data['title'] = 'login';
        $this->functional_layout($data);
    }
    public function register() {
        $data['template'] = 'register';
        $data['title'] = 'register';
        $this->functional_layout($data);
    }
    public function our_partner() {
        $data['template'] = 'our-partner';
        $data['title'] = 'our-partner';
        $this->functional_layout($data);
    }
    public function blogs_detail() {
        $data['template'] = 'blogs-detail';
        $data['title'] = 'blogs-detail';
        $this->functional_layout($data);
    }
    public function portfolio() {
        $data['template'] = 'portfolio';
        $data['title'] = 'portfolio';
        $this->functional_layout($data);
    }
    public function itservice() {
        $data['template'] = 'itservice';
        $data['title'] = 'itservice';
        $this->functional_layout($data);
    }
 
    public function insert() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = $this->functional->insert($request);
    }
    public function subscribe_email() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = $this->functional->subscribe_email($request);
    }
     public function insert_contact() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = $this->functional->insert_contact($request);
    }
    public function insert_blog_likes_count() {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = $this->functional->insert_blog_likes_count($request);
    }

    public function insert_comment($blog_id = NULL) {
        $request = json_decode(file_get_contents('php://input'), TRUE);
        $data = $this->functional->insert_comment($request,$blog_id);
    }

    public function fetch_blog_data() {
        $data = $this->functional->fetch_blog_data();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function fetch_comments_count() {
        $data = $this->functional->fetch_comments_count();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function fetch_contact_data() {
        $data = $this->functional->fetch_contact_data();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function commentsCount($id = NULL) {
        $data = $this->functional->commentsCount($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function blogCommentsCount() {
        $data = $this->functional->blogCommentsCount();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function fetch_comments_data($id = NULL) {
        $data = $this->functional->fetch_comments_data($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    public function fetch_google_map_data() {
        $this->googlemaps->initialize();
        $data = $this->functional->fetch_google_map_data();
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function fetch_blog_details($id = Null) {
        $data = $this->functional->fetch_blog_details($id);
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

}
