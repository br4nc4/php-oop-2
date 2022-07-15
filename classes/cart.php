<?php

class Cart {
    private $products = [];

    public function add($product){
        $this->products[] = $product;
    }

    public function getTotal($discount = 0) {

    }

    public function getProducts()
    {
        return $this->products;
    }
}