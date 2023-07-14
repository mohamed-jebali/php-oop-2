<?php

include_once __DIR__."/sub_classes/food.php";
include_once __DIR__."/sub_classes/pet_kennel.php";

class Products {
    public $img;
    public $title;
    public $price;
    public $category;
    public $type;


    public function __construct(String $img,String $title,float $price,String $category,String $type) {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}


?>