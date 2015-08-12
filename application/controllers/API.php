<?php
class API extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('api_model');
  }

  public function index() {
    $data['title'] = 'Test API setup';
    $data['news'] = $this->api_model->get_person('Isaac', 'Bowen');
    $this->load->view('templates/header', $data);
    $this->load->view('templates/footer');
  }

  //public function get($fname, $lname) {

  //}

}
