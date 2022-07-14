<?php 

require_once __DIR__ ."/product.php";

class Objects extends Product{
    public $dimension;
    public $weight;

    public function getDimension()
    {
        return $this->dimension;
    }

    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
}
?>