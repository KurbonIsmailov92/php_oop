<?php error_reporting(0);

require_once 'classes/firstClass.php';

$object_1 = new FirstClass();
$object_2 = new FirstClass();

var_dump($object_1);
var_dump($object_2);