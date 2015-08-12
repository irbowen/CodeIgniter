<?php
class Rest extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('rest_model');
  }

  public function index() {
    $data['title'] = 'Test API setup';
    $data['person'] = $this->rest_model->get_person('Isaac', 'Bowen');
    $this->load->view('rest/view', $data);
  }

  public function get($fname, $lname) {
    $data['title'] = 'Test API setup';
    $data['person'] = $this->rest_model->get_person($fname, $lname);
    $this->load->view('rest/view', $data);
  }

  public function post($fname, $lname, $data) {
    $this->rest_model->post_person($fname, $lname, $data);
  }

}
