<?php

class Product{
    protected $name;
    protected $price;
    protected $serialCode;
    protected $desription;

    
    public function __construct($_name, $_price, $_serialCode, $_description)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setSerialCode($_serialCode);
        $this->setDescription($_description);
    } 

    // getter
    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getSerialCode(){
        return $this->serialCode;
    }

    public function getDescription(){
        return $this->description;
    }

    // setter
    private function setName($_name){
        $this->name = $_name;
    }

    private function setPrice($_price){
        $this->price = $_price;
    }
    
    private function setSerialCode($_serialCode){
        $this->serialCode = $_serialCode;
    }

    private function setDescription($_description){
        $this->description = $_description;
    }
}