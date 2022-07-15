<?php

class CreditCard {
    private $type;
    private $number;
    private $cvv;

    function __construct($_type, $_number, $_cvv)
    {
        $this->setType($_type);
        $this->setNumber($_number);
        $this->setCvv($_cvv);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }
}