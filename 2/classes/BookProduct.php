<?php


class BookProduct extends Product implements IGadget
{
    public $pages;

    public function __construct($name, $price, $pages)
    {
        parent::__construct($name, $price);
        $this->pages = $pages;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
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