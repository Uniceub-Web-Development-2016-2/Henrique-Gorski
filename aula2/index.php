<?php

class math {

	private $num_1;
	private $num_2;
}

puplic function __construct($num_1, $num_2) {

	this->num_1 = $num_1;
	this->num_2 = $num_2;
}

public function sumAtributes() {

	return $this->num_1 + $this->num_2; 
}

public function sum($num_1, $num_2) {
	
	if($num_1 < 0 || $num_2 < 0)
		return "Can not sum mothafucker!";
	return $num_1 + $num_2;
}

public function sumAll ($numberArray) {

	foreach($numberArray as $number) {
		
		$sum = $sum + $number;
	}

	return $sum;

}

$math = new Math(3,7);
echo $math->sumAtrubutes();
echo "</br>";
echo $math->sum(2,7);
$array = array(3, 4, 7);
echo "</br>";
echo $math->sumAll($array);

