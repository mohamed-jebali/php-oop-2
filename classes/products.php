<?php

include_once __DIR__."/sub_classes/food.php";
include_once __DIR__."/sub_classes/pet_kennel.php";

class Products {
    public $img;
    public $title;
    public $price;


    public function __construct(String $img,String $title,int $price) {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
    }
}


?>