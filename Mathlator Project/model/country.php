<?php
class Country {

	private $idCountry;
	private $strCountryName;
	
	function __construct($strCountryName) {
	
		$this->strCountryName = $strName;
		
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