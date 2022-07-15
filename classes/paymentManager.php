<?php

class PaymentManager {
    private $paymentMethods = [];

    public function add($_paymentMethod){
        $this->paymentMethods[] = $_paymentMethod;
    }

    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }
}