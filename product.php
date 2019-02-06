<?php

class Product{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
$product = new Product('Big Mac', '4.99');
var_dump($product);