<?php 
require_once __DIR__ ."/cart.php";
require_once __DIR__ ."/paymentManager.php";
class Customer {
    private $registered = false;
    private $firstName;
    private $lastName;
    public Cart $cart;
    public PaymentManager $paymentManager;

    function __construct($_firstName = null, $_lastName = null)
    {
        $this->cart = new Cart();
        $this->paymentManager = new PaymentManager();

        if(isset($_firstName) && isset($_lastName)){
            $this->register($_firstName, $_lastName);
        }
    }

    
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    public function setFirstName($firstName)
    {
        if(!isset($firstName) || strlen(trim($firstName)) === 0){
            throw new Exception("il nome inserito non è valido");
        }
        $this->firstName = $firstName;

        return $this;
    }

    
    public function getLastName()
    {
        return $this->lastName;
    }

    
    public function setLastName($lastName)
    {
        if(!isset($lastName) || strlen(trim($lastName)) === 0){
            throw new Exception("il cognome inserito non è valido");
        }
        $this->lastName = $lastName;

        return $this;
    }

    public function getRegistered()
    {
        return $this->registered;
    }


    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

    public function register ($_firstName, $_lastName) 
    {
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setRegistered(true);
    }

    public function checkout($paymentIndex) {
        $total = $this->cart->getTotal();

        var_dump("totale carello " .$total . "€"); //somma totale dei prezzi degli articoli presenti nel carrello

        $discount = 0;
        if($this->registered) {
            $discount = 20;
        } else {
            $discount;
        }

        $totalWithDiscount = $total - ($total * $discount /100);

        var_dump("totale scontato " . $totalWithDiscount . "€"); //somma totale dei prezzi con lo sconto del 20% se l'utente è registrato


        $method = $this->paymentManager->getMethod($paymentIndex);

        //Totale dopo il controllo sulla data di scadenza della carta di credito
        if($method->checkExpiration()) {
            echo "<strong>Pagamento riuscito</strong> <br> Totale: " . $totalWithDiscount . "€";
        } else {
            echo "<strong>Pagamento fallito</strong> <br> Carta scaduta il " .$method->getExpireDate();
        }
    }
}
?>