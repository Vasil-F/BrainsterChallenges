<?php

require_once __DIR__ . "/autoload.php";

class MarketStall{

    public $products = [];
    public $name;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function addProductToMarket(string $name, Product $object)
    {
        $this->products[$name] = $object;
    }

    public function getItem(string $item, int $amount)
    {
        if (array_key_exists($item, $this->products)) 
        {
            return  ['amount'=>$amount, 'item'=>$this->products[$item]];
        } else {
            echo " $item not found in current market stall <br> ";
            // foreach ($this->products as $key => $value){
            //     echo "$key  ";
            // }
            // echo "] <br>";
            return false;
        }
    }

    public function printMarketStall($number)
    {
        echo "Products available in market stall $number: <br>";
        foreach ($this->products as $key => $value) {
            echo $key . "<br>";
        }
        echo "<br>";
    }
}