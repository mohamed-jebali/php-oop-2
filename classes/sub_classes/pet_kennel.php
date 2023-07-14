<?php

class Pet_Kennel extends Products {
    public $name;
    public $size;
    public $material;

    public function __construct(String $name,String $size,String $material) {
        $this->name = $name;
        $this->size = $size;
        $this->material = $material;
    }
}