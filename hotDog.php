<?php
require_once('config/config.php');
require_once('./meal.php');
require_once('./partials/header.php');?>
<?php

class HotDog extends meal{


    public function __construct($size, $base) {
        $this->size = $size;
        $this->base = $base;
        $this->status = "en cours de commande";
        $this->orderedAt = new DateTime("now");
        $this->price = $this->calculatePrice();
    }

    public function calculatePrice() { 
        if ($this->size === "S") {
            $price = 5;
        }
        if ($this->size === "M") {
            $price = 10;
        }
        if ($this->size === "L") {
            $price = 15;
        }
        return $price;
    }
   
}

$pizzaAndrea =  new hotDog ('M','pain');

var_dump($pizzaAndrea);

require_once('./partials/header.php');;

?>