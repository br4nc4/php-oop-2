<?php 
require_once "product.php";
require_once "food.php";
require_once "objects.php";

$product = new Product();
$food = new Food();
$objects = new Objects();

var_dump($product, $food, $objects);
?>