<?php
require_once __DIR__ ."/product.php";

class Objects extends Product {
    private $material;
    private $color;

    function __construct($_price, $_title, $_material, $_color)
    {
        parent::__construct($_price, $_title);
        $this->setMaterial($_material);
        $this->setColor($_color);
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }
}