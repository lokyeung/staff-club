<?php

class user_model extends CI_Model {

	public function __construct() {
		// $this->load->database();
		require APPPATH . '/config/db.php';
	}

	public function get_by_id($id) {
		$query = $this->db->get_where('memebers', array('ID' => $id));
		return $query->row_array();
	}
}