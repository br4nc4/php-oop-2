<?php 
class CardPayment {
    public $expireDateCard;
    public $cart = [];

    public function fakePurchase($attributeCart, $newValueCart) {
        $this->cart[$attributeCart][] = ["newValueCart" => $newValueCart];
    }

    public function getFakePurchase($attributeCart) {
        return $this->cart[$attributeCart];
    }

    public function getEntirePurchase(){
        return $this->cart;
    }
}
?>