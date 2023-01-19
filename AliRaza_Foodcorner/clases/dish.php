<?php

include ("product.php");

class Dish extends Product{
    public function __construct ($id, $name, $picture, $price, $quantity){
        parent::__construct ($id, $name, $picture, $price, $quantity);
    }

    public static function calculatePrice($Plist){
        $total = 0;
        foreach($Plist as $list){
            $total = $total + $list;
               
        }
        return $total;
    }

    public function  calculateSQ(){
        return (int) $this->quantity*$this->price;
    }
}

?>