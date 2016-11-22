<?php

include_once('control/util.php');

class Template {	
	
	function pageTop() {
		$pageTop = "<!DOCTYPE HTML>\n"
					. "<html lang='en'>";
					
		return $pageTop;			
	}

	function metaLinks() {
        $metaLinks = "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"
			. "	<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"
			. "	<meta http-equiv=\"Content-Language\" content=\"EN\">\n"
			. "	<meta name=\"author\" content=\"Henrique Gorski\">\n"	
			. "	<link rel=\"shortcut icon\" type=\"image/png\" href=\"images/favicon.png\"/>\n"
			. "	<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />\n"
			. "	<link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>\n"
			. "	<script type=\"text/javascript\" src=\"js/scripts.js\"></script>";
        return $metaLinks;	
	}

	function pageHeader() {
	
		$util = new Util();
		$quote = $util->randomQuotes();
		
		$pageHeader = "<div id=\"header\">\n"
			. "	<div id=\"logo\"> <a href=\"Executar?acao=Home.home\"><img src=\"images/logo.jpg\" width=\"150\" height=\"110\" alt=\"Mathlator.com\" /></a>\n"
			. "    	<h1 class=\"slogan\">Math Calculator & Tools</h1>\n"
			. "    </div>\n"
			. "    <div id=\"quote\">\n"
			. "    <p>".$quote."</p>\n"
			. "    </div>\n"
			. "</div>";

        return $pageHeader;
	}

	function mainMenu() {
        $mainMenu = "<div id=\"menu\">\n"
                . "        <ul>\n"
                . "            <li><a href=\"tool/is-prime-number.php\">Is Prime Number?</a></li>\n"
                . "            <span>|</span>\n"
                . "            <li><a href=\"tool/prime-interval-sequence.php\">Prime Interval Sequence</a></li>\n"
                . "            <span>|</span>\n"
                . "            <li><a href=\"tool/fibonacci-sequence.php\">Fibonacci Sequence</a></li>\n"
                . "            <span>|</span>\n"
                . "            <li><a href=\"tool/fibonacci-sequence-interval.php\">Fibonacci Sequence Interval</a></li>\n"
				. "            <span>|</span>\n"
                . "            <li><a href=\"tool/math-simbols.php\">Math Simbols</a></li>\n"				
                . "        </ul>\n"
                . "</div>";

        return $mainMenu;
	}

	function adsMenu() {
        $adsMenu = "<div id=\"ads-menu\"><img src=\"images/SNP_586A5ACE683FE8BE05136C11100EE28C4316_3285834_en_v0.png\" width=\"698\" height=\"15\" /></div>";

        return $adsMenu;
	}

	function fbShare() {
        $fbShare = "<div id=\"fb-share\"><p>Did you liked this tool? <strong>Share</strong> it to your friends: </p><div class=\"fb-like\" data-layout=\"button\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div></div>";
        
        return $fbShare;
	}

	function adsFooter() {
        $adsFooter = "<div id=\"ads-footer\"><img src=\"images/SNP_BBFA15D142E88EAB62B5C247174644F87043_2922338_en_v2.png\" width=\"468\" height=\"60\" alt=\"Banner\" /></div>";

        return $adsFooter;
	}

	function footerMenu() {
        $footerMenu = "<div id=\"menu-footer\">\n"
			. "<a href=\"Executar?acao=Home.home\">Home</a><span> | </span><a href=\"Executar?acao=Misc.aboutTheProject\">About the Project</a><span> | </span><a href=\"Executar?acao=Misc.contact\">Contact</a><span> | </span><a href=\"Executar?acao=Misc.getInvolved\">Get Involved</a>\n"
			. "</div>";

        return $footerMenu;
	}

	function footer() {
        $footer = "<div id=\"footer\">\n"
                . "By using this website, you signify your acceptance of <strong><a href=\"Executar?acao=Misc.termsAndConditions\">Terms and Conditions</a></strong> and <strong><a href=\"Executar?acao=Misc.privacyPolicy\">Privacy Policy</a></strong>.<br />\n"
                . "© 2016 <a href=\"http://www.mathlator.com\">Mathlator.com</a> - All rights reserved.\n"
                . "</div>";

        return $footer;
	}

}	