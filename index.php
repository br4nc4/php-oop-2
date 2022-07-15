<?php
require_once "classes/customer.php";

$customer = new Customer();
$customer->register("Marco", "Bianchi");

var_dump($customer);