<?php

class Product{
    private $id;
    protected $name;
    protected $price;
    protected $serialCode;
    protected $desription;

    public function __construct($_name, $_price, $_serialCode, $_description)
    {
        $this->id = substr($_name, 2) . rand(11111,99999) . substr($_serialCode, 2);
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
        try{
            if(strlen($_serialCode) === 10 && is_int($_serialCode)){
                $this->serialCode = $_serialCode;
            }else {
                throw new LengthException('SetSerialCode accepts only 10 number');
            }
        }catch(Exception $e){
            echo 'Invalid serial code' . $e->getMessage();
        }
    }

    private function setDescription($_description){
        $this->description = $_description;
    }
}