<?php
//методы объекта
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,  1) . '</pre>';
}

$car1 = new Car();
$car1->collor = 'black';
$car1->brand = 'Volvo';
$car1->speed = 260;

$car2 = new Car();
$car2->collor = 'red';
$car2->brand = 'BMW';
$car2->speed = 320;

echo $car1->getCarInfo();
echo $car2->getCarInfo();