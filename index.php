<?php
require_once "classes/customer.php";
require_once "classes/food.php";
require_once "classes/objects.php";
require_once "classes/creditCard.php";

$customer = new Customer();
$creditCard = new CreditCard("visa", "74124598326597580", "445");

$customer->paymentManager->add($creditCard);
$customer->register("Marco", "Bianchi");


$products = [
    new Food(2.50, "crocchette pollo", "2022-10-01", ["pollo", "farina"]),
    new Food(2.80, "crocchette salmone", "2023-01-01", ["salmone", "farina"]),
    new Objects(10.90, "palla", "gomma", "blu"),
    new Objects(15.50, "tiragraffi", "legno", "legno"),
];

$customer->cart->add($products[0], $products[2], $products[1]);

var_dump($customer);
var_dump($customer->cart->getProducts());