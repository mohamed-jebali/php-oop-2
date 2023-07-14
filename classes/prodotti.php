<?php

class Products extends Shop {
    public $img;
    public $title;
    public $price;
    public $icon;


    public function __construct(String $img,String $title,int $price,Article $icon) {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;

    }
}

class Article extends Shop {
    public $toys;
    public $food;
    public $pet_kennel;

    public function __construct(String $cat,String $dog) {
        $this->toys = $toys;
        $this->food = $food;
        $this->pet_kennel = $pet_kennel;
    }
}