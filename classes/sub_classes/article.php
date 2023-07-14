<?php

class Article extends Products {
    public $toys;
    public $food;
    public $pet_kennel;

    public function __construct(String $toys,String $food,String $pet_kennel) {
        $this->toys = $toys;
        $this->food = $food;
        $this->pet_kennel = $pet_kennel;
    }
}