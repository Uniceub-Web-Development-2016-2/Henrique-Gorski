<?php

class Util {

	function randomImg() {

        $imgs = array("math1.jpg", "math2.jpg", "math3.jpg");
        $randomNum = rand(0,2);
		
        return $imgs[$randomNum];

    }
	
    function randomQuotes() {

        $quotes = array("&quot;Mathematics is like checkers in being suitable for the young, not too difficult, amusing, and without peril to the state&quot; - Plato",
            "&quot;But mathematics is the sister, as well as the servant, of the arts and is touched by the same madness and genius.&quot; - Marston Morse",
            "&quot;Mathematics compares the most diverse phenomena and discovers the secret analogies that unite them.&quot; - Joseph Fourier ",
            "&quot;Mathematics is concerned only with the enumeration and comparison of relations.&quot; - Carl Friedrich Gauss",
            "&quot;Mathematics serves as a handmaiden for the explanation of the quantitative situations in other subjects, such as economics.&quot; - H. F. Fehr");

		$randomNum = rand(0,4);

        return $quotes[$randomNum];
    }	

}