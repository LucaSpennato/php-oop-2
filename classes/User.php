<?php
class User{
    protected $userName;
    protected $lastName;
    protected $cart = [];

    function __construct($_userName, $_lastName, $_cart)
    {
        $this->setUserName($_userName);
        $this->setLastName($_lastName);
        $this->addToCart($_cart);
    }

    // getter 
    public function getUserName(){
        return $this->userName;
    }

    public function getLastName(){
        return $this->lastName;
    }

    public function getCart(){
        return $this->cart;
    }

    // setter 
    private function setUserName($_userName){
        $this->userName = $_userName;
    }

    private function setLastName($_lastName){
        $this->lastName = $_lastName;
    }

    private function addToCart($_cart){
        $this->cart = $_cart;
    }

}