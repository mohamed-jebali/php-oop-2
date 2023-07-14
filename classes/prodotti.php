<?php

class Products extends Shop {
    public $cat;
    public $dog;

    public function __construct(String $cat,String $dog) {
        $this->cat = $cat;
        $this->dog = $dog;
    }
}