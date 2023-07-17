<?php

include_once __DIR__."/category.php";

class Products {
    public $img;
    public $title;
    public $price;
    public $toys;
    public $category;


    public function __construct(String $img,String $title,float $price,Category $category) {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }
}


?>