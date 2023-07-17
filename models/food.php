<?php

include_once __DIR__."/products.php";

class Food extends Products {
    public $name;
    public $calories;
    public $taste;

    public function __construct(String $name,String $calories,String $taste) {
        parent::__construct($img, $title, $price);
        $this->name = $name;
        $this->calories = $calories;
        $this->taste = $taste;
    }
}