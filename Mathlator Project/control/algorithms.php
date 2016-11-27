<?php

class Algorithms {

	function isPrime($num1) {
	    $result = "";
        if ($num1 > 999999 || $num1 < 0) { // Testando o limite máximo
            $result = "<p class=\"negative-result\">The number have exceeded the limit.</p>";
        } else {
            if ($num1 % 2 == 0 && $num1 != 2) { // Testando se é par excluindo o num 2
                $result = "<p class=\"negative-result\">No, " + num1 + " isn't a prime number!</p>";
            } else {
                $count = 0;
                for ($i = 1; $i <= $num1; $i++) { // Efetuando o teste um por um
                    if ($num1 % $i == 0) {
                        $count++;
                    }
                    if ($count == 2) { // Resultado final
                        $result = "<p class=\"positive-result\">Yes, " . $num1 . " is a prime number!</p>";
                    } else {
                        $result = "<p class=\"negative-result\">No, " . $num1 . " isn't a prime number!</p>";
                    }
                }
            }

        }
        return $result;
	
	}



}