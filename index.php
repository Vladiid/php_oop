<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('Black', 220, 'Honda', 4, 2020);
$car2 = new Car('White', 250, 'Tesla', 4, 2020);
$car3 = new Car('Red', 180, 'Audi', 4, 2020);

echo $car1  ->getCarInfo();
echo $car2  ->getCarInfo();
echo $car3  ->getCarInfo();