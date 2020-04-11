<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();

$car1->color = 'Black';
$car1->brand = 'Honda';
$car1->speed = 220;
$car1->year = 2015;

$car2 = new Car();
$car2->color = 'White';
$car2->brand = 'Tesla';
$car2->speed = 250;
$car2->year = 2020;

$car3 = new Car();
$car3->color = 'Red';
$car3->brand = 'Audi';
$car3->speed = 180;
$car3->year = 2017;

echo $car1  ->getCarInfo();
echo $car2  ->getCarInfo();
echo $car3  ->getCarInfo();