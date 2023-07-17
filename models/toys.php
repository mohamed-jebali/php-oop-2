<?php

include_once __DIR__."/products.php";

class Toys extends Products {
    public $color;


    public function __construct(String $img,String $title,String $price,Category $category ,String $color) {
        parent::__construct($img, $title, $price,$category);
        $this->color = $color;
    }
}


?>