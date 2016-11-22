<?php

class Util {

	function randomImg() {

        $imgs = array("math1.jpg", "math2.jpg", "math3.jpg");
        $randomNum = rand(0,2);
		
        return $imgs[$randomNum];

    }

}