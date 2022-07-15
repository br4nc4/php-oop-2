<?php

class Cart {
    private $products = [];

    public function add(...$_products){
        //modifica della funzione add con rest operator e array_push
        //vedere file index.php alla riga 16
        array_push($this->products, ...$_products);
    }

    public function getTotal($discount = 0) {
        $total = 0;
        foreach($this->products as $product){
            $total += $product->getPrice();
        }
        return $total;
    }

    public function getProducts()
    {
        return $this->products;
    }
}