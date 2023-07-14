<?php

include_once __DIR__."/sub_classes/animal_category.php";
include_once __DIR__."/sub_classes/article.php";

class Products extends Shop {
    public $img;
    public $title;
    public $price;
    public $icon;
    public $category_animal;


    public function __construct(String $img,String $title,int $price,Article $icon,Animal_Category $category_animal) {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->icon = $icon;
        $this->category_animal = $category_animal;

    }
}


?>