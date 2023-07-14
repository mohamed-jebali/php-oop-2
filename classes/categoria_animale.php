<?php

class Category extends Shop {
    public $toys;
    public $food;
    public $pet_kennel;

    public function __construct(String $cat,String $dog) {
        $this->toys = $toys;
        $this->food = $food;
        $this->pet_kennel = $pet_kennel;
    }
}


// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->