<?php

class Product
{
    public $name;
    protected $price;

    private $discount = 0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        $this->setDiscount(15);
    }

    public function getProduct()
    {
        return "<hr><b>About Product:</b><br>
                Name: {$this->name}<br>
                Discount: {$this->getDiscount()}%<br>
<<<<<<< HEAD
                Old price: {$this->price}<br>
                Discount price: $ "."{$this->getPrice()}<br>";
=======
                Old price: $"."{$this->price}<br>
                Discount price: $"."{$this->getPrice()}<br>";
>>>>>>> a622d9f13d10592602331afe305dc56bc04ea11b
    }

    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}