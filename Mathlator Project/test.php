<?php

include('view/template.php');
include_once('control.util.php');

$template = new Template();
$util = new Util();

echo $pageTop->pageTop();

echo $util->randomQuotes();


