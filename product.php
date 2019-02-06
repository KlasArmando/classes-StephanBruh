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

class Client {
    public $name;
    public $age;
    public $clientNumber;

    public function __construct($name, $age, $clientNumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->clientNumber = $clientNumber;
    }
}


$product = new Product('Big Mac', '4.99');
var_dump($product);