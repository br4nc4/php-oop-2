<?php
class Product {
    private float $price;
    private string $title;
    private string $id;

    function __construct($_price, $_title) {
        $this->setPrice($_price);
        $this->setTitle($_title);
        $this->id = uniqid();
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }
}