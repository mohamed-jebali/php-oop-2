<?php

class Food extends Products {
    public $name;
    public $calories;
    public $taste;

    public function __construct(String $name,String $calories,String $taste) {
        $this->name = $name;
        $this->calories = $calories;
        $this->taste = $taste;
    }
}