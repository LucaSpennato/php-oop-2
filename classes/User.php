<?php
class User{
    protected $userName;
    protected $lastName;
    protected $buyingProducts = [];

    function __construct($_userName, $_lastName)
    {
        $this->setUserName($_userName);
        $this->setLastName($_lastName);
    }

    // getter 
    public function getUserName(){
        return $this->userName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    // setter 
    private function setUserName($_userName){
        $this->userName = $_userName;
    }

    private function setLastName($_lastName){
        $this->lastName = $_lastName;
    }
}