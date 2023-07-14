<?php

class Animal_Category extends Products {
    public $dog;
    public $cat;

    public function __construct(String $cat,String $dog) {
        $this->dog = $dog;
        $this->cat = $cat;
    }
}

