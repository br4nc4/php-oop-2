<?php 

require_once __DIR__ ."/cardPayment.php";
    class User extends CardPayment {
        public $signIn;
        public $discount;
        public $personalCart;

        public function setPersonalCart($personalCart)
        {
            $this->fakePurchase("personalCart", $personalCart);
            $this->personalCart = $personalCart;

            return $this;
        }
    }
?>