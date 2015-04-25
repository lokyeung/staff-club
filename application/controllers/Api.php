<?php
require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	function user_get() {
		if (!$this->get('id')) {
			$this->response(NULL, 400);
		}

		$user = $this->user_model->get_by_id($this->get('id'));
		// $users = array(
		// 	1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
		// 	2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
		// 	3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
		// );

		// $user = @$users[$this->get('id')];

		if ($user) {
			$this->response($user, 200); // 200 being the HTTP response code
		} else {
			$this->response(array('error' => 'User could not be found'), 404);
		}
	}

	function user_post() {

		if (!$this->post('id')) {
			$result = $this->user_model->insert($this->post());
		} else {
			$result = $this->user_model->update($this->post('id'), $this->post());
		}

		if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}

	}

	function users_get() {
		// $users = $this->user_model->get_all();
		$users = array(
			array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com'),
			array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => array('hobbies' => array('fartings', 'bikes'))),
		);

		if ($users) {
			$this->response($users, 200);
		} else {
			$this->response(NULL, 404);
		}
	}
}
?>