<?php

	function parseEvent($formData, $model){
		if(!isset($formData["email"])||!isset($formData["message"]))
			return;
			
		$email = $formData["email"];
		$message = $formData["message"];
		
		//lookup number of first user found. 
		$user = $model->users_model->getNumber($email);
		print_r($user);
		sendText($user->phone, $message, $model);
		
	}
	
	function sendText($to, $message, $model){
		file_put_contents("phoneNumber", $to);
		require(APPPATH.'third_party/twilio-php/Services/Twilio.php');
		//$model->load->library('Twilio');
		//require("../third_party/twilio-php/Services/Twilio.php");
		
		if($to{0}!=1)
			$to='1'.$to;
		
		$from = "+14357280603";
		$to = "+".$to;
		$sid = "AC8dcc306c08bac183a3f450f52ae759f2";
		$token = "ab8826ec37ae8ebc16542d51a21014ed";
		
		//recordError("prepping sms to: ".$to." message:".$message);
		
		$client = new Services_Twilio($sid, $token);
		$message = $client->account->sms_messages->create($from, $to, $message, array());
		
		//recordError("Sent message - ".$message->sid);
	
	
	}



