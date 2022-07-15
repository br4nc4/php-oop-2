<?php
require_once __DIR__ ."/product.php";

class Food extends Product {
    private $expirationDate;
    private $ingredients;

    function __construct()
    {
        
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}