<?php
class Avatar {

	private $idAvatar;
	private $strAvatarURL;
	
	function __construct($strAvatarURl) {
	
		$this->strAvatarURL = $strAvatarURL;
		
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