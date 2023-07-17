<?php

include_once __DIR__."/products.php";

class Toys extends Products {
    public $name;
    public $color;


    public function __construct(String $name,String $color) {
        parent::__construct($img, $title, $price);
        $this->name = $name;
        $this->color = $color;
    }
}


?>