<?php

function request() {

	private $method;
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;

	public function __construct($method, $protocol, $ip, $resource, $parameters) {
		$this->method = $method;
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->parameters = $parameters;
	}

	public function toString() {
		$parameters = "";
		$count = 0;
		foreach($this->parameters as $key => $value) {
			$parameters = $parameters . $key . "=" . $value . "&";
		}
		return $this->protocol. "://" . $this->ip . "/" . $this->resouce . "?" . substr($parameters, 0, -1);
	}
	
	public function SetMethod($method) {
		$this->method = $method;
	}

	public function GetMethod() {
		return $method;
	}

	public function SetProtocol($protocol) {
		$this->protocol = $protocol;
	}

	public function GetProtocol() {
		return $protocol;
	}

	public function SetIp($ip) {
		$this->ip = $ip;
	}

	public function GetIp() {
		return $ip;
	}

	public function SetResource($resource) {
		$this->resource = $resource;
	}

	public function GetResource() {
		return $resource;
	}

	public function SetParameters($parameters) {
		$this->parameters = $parameters;
	}
	
	public function GetParameters() {
		return $parameters;
	}

}

$request = new request("get", "http", "mathlator.com", "busca", array("busca" => "sexy chicks", "usuario" => "Iki", "preferencia" => "girls"));
echo $request->toString();

}
