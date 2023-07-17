<?php

include_once __DIR__."/products.php";

class Pet_Kennel extends Products {
    public $name;
    public $size;
    public $material;

    public function __construct(String $name,String $size,String $material) {
        parent::__construct($img, $title, $price);
        $this->name = $name;
        $this->size = $size;
        $this->material = $material;
    }
}