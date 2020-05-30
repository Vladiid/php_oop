<?php


class BookProduct extends Product
{
    public $pages;

    public function __construct($name, $price, $pages)
    {
        parent::__construct($name, $price);
        $this->pages = $pages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Pages: {$this->pages}<br>";
        return $out;

    }

    public function getPages()
    {
        return $this->pages;
    }


}