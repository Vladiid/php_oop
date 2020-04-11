<?php

class Car
{
    public $color;
    public $speed;
    public $brand;
    public $wheels = 4;

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