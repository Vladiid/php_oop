<?php

class Car
{
    public $color;
    public $speed;
    public $brand;
    public $wheels;
    public $years;

    public static $countCar = 0;

    const TEST_CAR = 'Prototype';
    const TEST_CAR_SPEED = 300;


    public function __construct($color, $speed, $brand, $wheels = 4, $year)
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->year = $year;
        self::$countCar++;
    }

    public static function getCount()
    {
        return self::$countCar;

    }

    public function getCarInfo()
    {
        return "<h3>About auto:</h3>
                Brand: {$this->brand}<br>
                Color: {$this->color} <br>
                Speed: {$this->speed} <br>
                Wheels: {$this->wheels} <br>
                Year: {$this->year} <br>
                ";
    }

    public function getPrototypeInfo()
    {
        return "<h3>About prototype:</h3>
                Brand: ".self::TEST_CAR."<br>
                Speed: ".self::TEST_CAR_SPEED."<br>
                ";
    }
}