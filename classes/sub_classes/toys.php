<?php


class Toys extends Products {
    public $name;
    public $color;


    public function __construct(String $name,String $color) {
        $this->name = $name;
        $this->color = $color;
    }
}


?>