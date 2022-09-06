<?php
class User{
    protected $cart = [];

    public function addToCart(...$products){

        foreach ($products as $product) {
            if(!is_a($product, "Product", true)){
                throw new Exception('Cannot put item in cart that are not Product');
            }
        }
        $this->cart = array_merge($this->cart, $products);
        
    }

    public function removeToCart($_product){
        array_search($_product, $this->cart);
    }
    
    public function getCartTotal(){
        
    }
    
    public function getCart(){
       return $this->cart; 
    }

    // getter 
    public function getUserName(){
        return $this->userName;
    }

}