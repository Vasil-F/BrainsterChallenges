<?php
require_once __DIR__ . "/autoload.php";

$product1 = new Product('Banana', 300, true);
$product2 = new Product('Orange', 400, true);
$product3 = new Product('Nuts', 500, false);
$product4 = new Product('Apple', 200, true);
$product5 = new Product('Rice', 250, false);
$product6 = new Product('Raspberry', 350, false);
$product7 = new Product('Pear', 650, true);
$product8 = new Product('Watermelon', 800, true);
$product9 = new Product('Coconut', 720, false);
$product10 = new Product('Kiwi', 470, false);
$product11 = new Product('Avocado', 1000, false);
$product12 = new Product('Peach', 370, true);

$marketStall1 = new MarketStall(['Banana'=>$product1,'Orange'=>$product2,'Nuts'=>$product3]);
$marketStall2 = new MarketStall(['Apple'=>$product4, 'Rice'=>$product5, 'Raspberry'=>$product6]);

$marketStall1->addProductToMarket('Pear', $product7);
$marketStall2->addProductToMarket('Watermelon', $product8);
$marketStall1->addProductToMarket('Coconut', $product9);
$marketStall2->addProductToMarket('Kiwi', $product10);
$marketStall1->addProductToMarket('Acovado', $product11);
$marketStall2->addProductToMarket('Peach', $product12);

$marketStall1->printMarketStall(1);
$marketStall2->printMarketStall(2);

$cart = New Cart();
$cart->addToCart( $marketStall1->getItem('Orange', 3) );
$cart->addToCart( $marketStall2->getItem('Apple', 5) );
$cart->addToCart( $marketStall2->getItem('Rice', 2) );
$cart->addToCart( $marketStall1->getItem('Banana', 6) );
$cart->addToCart( $marketStall1->getItem('Nuts', 10) );
$cart->addToCart( $marketStall2->getItem('Raspberry', 7) );
$cart->addToCart( $marketStall2->getItem('Peach', 7) );


$cart->printReceipt();

$cart->finalPrice();


// echo "<pre>";
// print_r($marketStall2);
