<?php

class Meal{
    protected $size;
    protected $price;
    protected $base;
    protected $status;
    protected $orderedAt;



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
}

?>