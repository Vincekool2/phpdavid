<?php

class Pizza {
    private $size;
    private $price;
    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
    private $status;
    private $orderedAt;

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
        if ($this->size === "XXXXXL") {
            $price = 350;
        }
        return $price;
    }

    public function pay() {
        if ($this->status === "en cours de commande"){
            $this->status = "payé";
        }
    }

    public function ship(){
        if($this -> status === "payé"){
            $this -> status = "livré";
        }
    }

    public function getSize(){
        return 'Taille : ' . $this -> size;
    }

    public function getBase(){
        return 'Base : ' . $this -> base;
    }

    public function getIngredients(){ 
        return 'Ingrédients : ' . $this -> ingredient1 . ' / ' . $this -> ingredient2 . ' / ' . $this -> ingredient3;
    }

    public function getPrice(){
        return 'Prix de la pizza : ' . $this -> price . '€';
    }
    
    public function getStatus(){
        return 'Statut : ' . $this -> status;
    }

    public function getOrderedAt(){
        return 'Date de commande : ' . $this -> orderedAt -> format('d/m/Y H:i:s');
    }

    public function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3) {
        $this->size = $size;
        $this->base = $base;
        $this->ingredient1 = $ingredient1;
        $this->ingredient2 = $ingredient2;
        $this->ingredient3 = $ingredient3;
        $this->status = "en cours de commande";
        $this->orderedAt = new DateTime("now");
        $this->price = $this->calculatePrice();
    }
}   

?>