<?php
require_once __DIR__ ."/../traits/validator.php";

class CreditCard {
    use Validator;

    private $type;
    private $number;
    private $cvv;
    private $expireDate;

    function __construct($_type, $_number, $_cvv, $_expireDate)
    {
        $this->setType($_type);
        $this->setNumber($_number);
        $this->setCvv($_cvv);
        $this->setExpireDate($_expireDate);
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
        $this->validateCreditNumber($number);
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

    public function getExpireDate()
    {
        return $this->expireDate;
    }

    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    public function checkExpiration() {
        $expiration = DateTime::createFromFormat("m/y", $this->expireDate);
        $presentTime = new DateTime("now");
        
        return $expiration > $presentTime;
    }
}