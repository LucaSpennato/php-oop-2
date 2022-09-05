<?php

class Utilities{
    protected $size;
    protected $porpouse;

    function __construct($_size, $_porpouse)
    {
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