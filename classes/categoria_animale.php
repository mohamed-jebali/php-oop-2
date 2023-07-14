<?php

class Animal_Type extends Shop {
    public $dog;
    public $cat;

    public function __construct(String $cat,String $dog) {
        $this->dog = $dog;
        $this->cat = $cat;
    }
}

