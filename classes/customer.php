<?php 
class Customer {
    private $registerd= false;
    private $firstName;
    private $lastName;

    function __construct($_firstName = null, $_lastName = null)
    {
        if(isset($_firstName) && isset($_lastName)){
            $this->setFirstname($_firstName);
            $this->setLastName($_lastName);
            $this->setRegistered = true;
        }
    }

    
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    
    public function getLastName()
    {
        return $this->lastName;
    }

    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}
?>