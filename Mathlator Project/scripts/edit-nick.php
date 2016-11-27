<?php
	session_start();
	include_once("../httpful.phar");
	
	if(isset($_POST['senha']) && isset($_POST['novasenha1']) && isset($_POST['novasenha2'])){
		
		$senha = $_POST['senha'];
		$novasenha1 = $_POST['novasenha1'];
		$novasenha2 = $_POST['novasenha2'];
		
		$id = $_SESSION['id'];
		
		$user = $_SESSION['usuario'];
		
		$get_request = "http://localhost/APIrest/tb_users/search?id=".$id;
		
		$response = \Httpful\Request::get($get_request)->send();
		
		$response_array = json_decode($response->body, true)[0];
		
		if($senha != $response_array['senha']){
			header('Location: ');
			die;
		}
		if($novasenha1 != $novasenha2){
			header('Location: ');
			die;
		}
		$url = "http://localhost/APIrest/tb_users";
		
		$update = array('senha' => $novasenha2, 'id' => $id);
		
		$body = json_encode($update);
		
		$response = \Httpful\Request::put($url)->sendsJson()->body($body)->send();
		
		header('Location: ');
	}
?>