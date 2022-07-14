<?php 
require_once "product.php";
require_once "food.php";
require_once "objects.php";
require_once "user.php";

$product = new Product();
$food = new Food();
$objects = new Objects();
$user = new User();

$user->setPersonalCart("Croccantini");

var_dump($product, $food, $objects);

var_dump($user->getEntirePurchase());
?>