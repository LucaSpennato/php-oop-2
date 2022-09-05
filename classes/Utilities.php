<?php

require_once __DIR__ . '/Product.php';

class Utilities extends Product{
    protected $size;
    protected $porpouse;

    function __construct($_name, $_price, $_serialCode, $_description, $_size, $_porpouse)
    {
        parent::__construct($_name, $_price, $_serialCode, $_description);
        $this->setSize($_size);
        $this->setPorpouse($_porpouse);
    }

    // getter
    public function getSize(){
        return $this->size;
    }

    public function getPorpouse(){
        return $this->porpouse;
    }

    // setter 
    private function setSize($_size){
        $this->size = $_size;
    }

    private function setPorpouse($_porpouse){
        $this->porpouse = $_porpouse;
    }
}