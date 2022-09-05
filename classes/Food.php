<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
    protected $packaging;
    protected $isWet;
    protected $wichAnimal;
    protected $nutritionValue;
    protected $isAdult;
    protected $expirationDate;
    protected $weight;

    public function __construct($_name, $_price, $_serialCode, $_description, $_packaging, $_isWet, $_wichAnimal, $_nutritionValue, $_isAdult, $_expirationDate, $_weight)
    {
        parent::__construct($_name, $_price, $_serialCode, $_description);
        $this->setPackaging($_packaging);
        $this->setIsWet($_isWet);
        $this->setWichAnimal($_wichAnimal);
        $this->setNutritionValue($_nutritionValue);
        $this->setIsAdult($_isAdult);
        $this->setExpirationDate($_expirationDate);
        $this->setWeight($_weight);
    }

    // getter
    public function getPackaging(){
        return $this->packaging;
    }

    public function getIsWet(){
        return $this->isWet;
    }

    public function getWichAnimal(){
        return $this->wichAnimal;
    }

    public function getnutritionValue(){
        return $this->nutritionValue;
    }

    public function getIsAdult(){
        return $this->isAdult;
    }

    public function getExpirationDate($_expirationDate){
        return $this->expirationDate;
    }

    public function getWeight(){
        return $this->weight;
    }

    // setter
    private function setPackaging($_packaging){
        $this->packaging = $_packaging;
    }

    private function setIsWet($_isWet){
        $this->isWet = $_isWet;
    }

    private function setWichAnimal($_wichAnimal){
        $this->wichAnimal = $_wichAnimal;
    }

    private function setNutritionValue($_nutritionValue){
        $this->nutritionValue = $_nutritionValue;
    }

    private function setIsAdult($_isAdult){
        $this->isAdult = $_isAdult;
    }

    private function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
    }

    private function setWeight($_weight){
        $this->weight = $_weight;
    }
}