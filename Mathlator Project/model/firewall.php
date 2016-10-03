<?php
class Firewall {

	private $idFirewall;
	private $strIpUser;
	private $dateTime;
	private $intCount;
	
	function __construct($strIpUser, $dateTime, $intCount) {
	
		$this->strIpUser = $strIpUser;
		$this->dateTime = $dateTime;
		$this->intCount = $intCount;
		
	}
	
	public function __get($property){
		if (property_exists($this, $property)) {
	      return $this->$property;
	    }
	}
	
	public function __set($property, $value) {
	    if (property_exists($this, $property)) {
	      $this->$property = $value;
	    }
	}
}