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
        $price = 0;
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

    public function pay() {
        if ($this->status === "en cours") {
            $this->status = "payé";
        }
    }

    public function ship() {
        if ($this->status === "payé") {
            $this->status = "livré";
        }
    }

    public function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3) {
        $this->size = $size;
        $this->base = $base;
        $this->ingredient1 = $ingredient1;
        $this->ingredient2 = $ingredient2;
        $this->ingredient3 = $ingredient3;
        $this->status = "en cours";
        $this->orderedAt = new DateTime("NOW");
        $this->price = $this->calculatePrice();
    }
}

?>

