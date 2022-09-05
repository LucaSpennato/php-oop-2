<?php
class User{
    protected $userName;
    protected $lastName;
    protected $creditCard;
    protected $cart = [];

    function __construct($_userName, $_lastName, $_creditCard, $_cart)
    {
        $this->setUserName($_userName);
        $this->setLastName($_lastName);
        $this->setCreditCard($_creditCard);
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

    private function setCreditCard($_creditCard){
        try{
            if($_creditCard < date("m/Y")){
                $this->creditCard = $_creditCard;
            }else {
                throw new Exception('The credit card already expired');
            }
        }catch(Exception $e){
            echo 'Invalid credit card ' . $e->getMessage();
        }
    }

    private function addToCart($_cart){
        $this->cart = $_cart;
    }

}