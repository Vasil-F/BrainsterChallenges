<?php

require_once __DIR__ . "/autoload.php";

class Product {
    
    private $name;
    private $price;
    private $sellingByKg;

    public function __construct(string $name, int $price, bool $sellingByKg)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sellingByKg = $sellingByKg;

    }

    public function getSellingByKg()
    {
        return $this->sellingByKg;
    }

    public function getPrice(){
        
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }
}