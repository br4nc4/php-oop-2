<?php 
class Customer {
    private $registered= false;
    private $firstName;
    private $lastName;

    function __construct($_firstName = null, $_lastName = null)
    {
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

    public function getRegistered()
    {
        return $this->registerd;
    }


    private function setRegistered($registerd)
    {
        $this->registerd = $registerd;

        return $this;
    }

    public function register ($_firstName, $_lastName) 
    {
        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setRegistered(true);
    }
}
?>