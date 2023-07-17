<?php

include_once __DIR__."/products.php";

class PetKennel extends Products {
    public $size;
    public $material;

    public function __construct(String $img,String $title,String $price,Category $category,String $size,String $material) {
        parent::__construct($img, $title, $price,$category);
        $this->size = $size;
        $this->material = $material;
    }
}