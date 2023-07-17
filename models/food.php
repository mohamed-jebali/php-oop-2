<?php

include_once __DIR__."/products.php";

class Food extends Products {
    public $calories;
    public $taste;

    public function __construct(String $img,String $title,String $price,Category $category,float $calories,String $taste) {
        parent::__construct($img, $title, $price,$category);
        $this->calories = $calories;
        $this->taste = $taste;
    }
}