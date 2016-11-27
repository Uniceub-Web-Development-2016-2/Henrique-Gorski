<?php
	
	//include_once('../controller/util.php');
	include_once('../httpful.phar');
	
	if(isset($_POST['name']) && isset($_POST['nick']) && isset($_POST['gender']) && isset($_POST['country']) && isset($_POST['email']) && isset($_POST['password'])) && isset($_POST['avatar'] {
	
		$name = $_POST['name'];
		$nick = $_POST['nick'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password = $_POST['avatar'];
		
		if(strlen($usuario) <= 5){
		header('Location: ');
		die;
		}
		
		if($senha != $confirmar_senha){
		header('Location: ');
		die;
		}
		
		if(is_null($usuario) || is_null($nome) || is_null($senha) || is_null($confirmar_senha) || is_null($email) || is_null($genero) || is_null($datanasc)){
		header('Location: ');
		die;
		}
		
		$register_array = array('name' => $name, 'nick' => $nick, 'gender' => $gender, 'country' => $country, 'email' => $email, 'password' => $password, 'avatar' => $avatar);
		
		$body = json_encode($register_array);
		
		$url = "http://localhost/controller/users";
		
		$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 
		
		$array = json_decode($response->body, true);
		
		if(!empty($array)){
		
		header('Location: ../user/success-registration.php');
		
		}
		else{
			
		header('Location: ../user/fail-registration.php');
	}
}
?> 