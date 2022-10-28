<?php

require_once __DIR__ . "/autoload.php";


class Cart {

    private $cartItems = [];
    
    public function addToCart($cartItem)
    {
        if($cartItem != false){
            array_push($this->cartItems, $cartItem);
        }
       
    }

    public function printReceipt()
    {
        if(empty($this->cartItems))
        {
            echo "Your cart is empty!";
        } else {
            foreach ($this->cartItems as $item ) {
                //Raspberry | 3 gunny sacks | total= 1665 denars
                $amounttemp = $item['amount'];
                $nametemp = $item['item']->getName();
                $pricetemp = $item['item']->getPrice() * $amounttemp;
                if($item['item']->getSellingByKg()){
                    $measureIn = 'kg'; 
                }
                else { $measureIn = 'gunny sacks';}
                
                echo "$nametemp | $amounttemp $measureIn | total = $pricetemp denars";
                echo "<br>";
            }
        }
    }

    public function finalPrice()
    {
        $finalPrice = 0;
        foreach($this->cartItems as $item){
            $finalPrice += ($item['item']->getPrice() * $item['amount']);
        }
        echo "Final price amount: $finalPrice";
    }
}