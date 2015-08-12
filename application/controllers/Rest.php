<?php
class Rest extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('rest_model');
  }

  public function index() {
    $data['title'] = 'Test API setup';
    $data['person'] = $this->rest_model->get_person('Isaac', 'Bowen');
    $this->load->view('templates/header', $data);
    $this->load->view('rest/view', $data);
    $this->load->view('templates/footer');
  }

}
