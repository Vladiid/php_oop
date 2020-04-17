<?php

class Car
{
    public $color;
    public $speed;
    public $brand;
    public $wheels;
    public $years;


    public function __construct($color, $speed, $brand, $wheels, $year)
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->brand = $brand;
        $this->wheels = $wheels;
        $this->year = $year;
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
}