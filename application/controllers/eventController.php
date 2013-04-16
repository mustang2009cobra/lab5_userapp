<?php

class eventController extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper('event');
	}
	
	public function recieve(){
		$formData = $this->input->post(NULL, TRUE);
		
        $data = array();
		
		file_put_contents("email", $formData['email']);
		file_put_contents("message", $formData['message']);

		$formData["type"]="formData";
		$data["formData"] = $formData;
		
		//$this->load->view('templates/header');
		//$this->load->view('pages/events', $data);
		//$this->load->view('templates/footer');
		
		
		//if event contains email, lookup phonenumber registered to email, send message. 
		parseEvent($formData,$this);
	}
	
	


}