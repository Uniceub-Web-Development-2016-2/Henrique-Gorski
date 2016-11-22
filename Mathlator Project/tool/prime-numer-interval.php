<?php
class ToolPrimeNumberInterval {

	private $idToolPrimeNumberInterval;
	private $intIdUser;
	private $strNameUser;
	private $intRateValue;

	
	function __construct($intIdUser, $strNameUser, $intRateValue) {
	
		$this->intIdUser = $intIdUser;
		$this->strNameUser = $strNameUser;
		$this->intRateValue = $intRateValue;
		
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