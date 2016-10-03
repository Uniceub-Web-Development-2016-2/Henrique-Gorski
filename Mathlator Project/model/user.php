<?php
class User {

	private $idUser;
	private $strName;
	private $strNick;
	private $strGender;
	private $strEmail;
	private $strPass;
	private $intCountry;
	private $intAvatar;
	
	function __construct($strName, $strNick, $strGender, $strEmail, $strPass, $intCountry, $intAvatar) {
	
		$this->strName = $strName;
		$this->strNick = $strNick;
		$this->strGender = $strGender;
		$this->strEmail = $strEmail;
		$this->strPass = $strPass;
		$this->intCountry = $intCountry;
		$this->intAvatar = $intAvatar;
		
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