<?php
class News_model extends CI_Model {

  public function __construct() {
    $this->load->database();
  }

  public function get_person($fname = FALSE, $lname = FALSE) {
    if ($fname === FALSE || $lname === FALSE) {
      $query = $this->db->get('people');
      return $query->result_array();
    }

    $query = $this->db->get_where('people', array('fname' => $fname, 'lname' => $lname));
    return $query->row_array();
  }

}
