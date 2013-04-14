<?php

class eventController extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function recieve(){
        $data = array();

		$this->load->view('templates/header');
		$this->load->view('pages/events', $data);
		$this->load->view('templates/footer');
	}

}