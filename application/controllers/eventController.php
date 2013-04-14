<?php

class eventController extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
	}
	
	public function recieve(){
		$formData = $this->input->post(NULL, TRUE);
		$data = $formData;
        //$data = array();

		$this->load->view('templates/header');
		$this->load->view('pages/events', $data);
		$this->load->view('templates/footer');
	}

}