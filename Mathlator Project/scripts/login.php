<?php

session_start();
include_once('../httpful.phar');

if(isset($_POST['login'])) {

	$get_request = 'http://localhost/controller/users/search?user="'.$_POST['email'].'"&password="'.$_POST['password'].'"';
	
	$response = \Httpful\Request::get($get_request)->send();
	
	$values = json_decode($response->body, true)[0];
	
	if(!empty($values) && $values["email"] == $_POST["email"] && $values["password"] == $values["password"]){
	
 		$_SESSION['nick'] = $values['nick'];
		
		$_SESSION['id'] = $values['id'];
		
	} else {
		header("Location: ");
	}
	
	header("Location: profile.php");
}
?>


