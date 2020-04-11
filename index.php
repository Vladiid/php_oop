<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();


$car1->color = 'Black';
$car1->brand = 'Honda';
$car1->speed = 220;
$car1->year = 2015;

$car2->color = 'White';
$car2->brand = 'Tesla';
$car2->speed = 250;
$car2->year = 2020;
//debug($car1);
//debug($car2);
echo "<h3>About auto:</h3>
Brand: {$car1->brand}<br>
Color: {$car1->color} <br>
Speed: {$car1->speed} <br>
Year: {$car1->year} <br>
";