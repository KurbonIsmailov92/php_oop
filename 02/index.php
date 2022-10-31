<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

debug($car1);

$car1->collor = 'black';
$car1->brand = 'BMW';
$car1->speed = 200;
$car1->year = 2018;

$car2->collor = 'white';
$car2->brand = 'GMS';
$car2->speed = 180;
$car2->year = 2020;

debug($car1);
debug($car2);