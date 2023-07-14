<!-- esercizio di oggi: :gandalf: PHP OOP 2 :php:
nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php
include_once __DIR__."/classes/categoria_animale.php";
include_once __DIR__."/classes/prodotti.php";

class Shop {
    public $address;
    public $website;

    public function __construct(String $address,String $website) {
        $this->address = $address;
        $this->website = $website;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2</title>
    <!-- CSS LINK -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- BOOSTRAP LINK V.5.3.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class='bg-success container-fluid py-3 mb-5'>
        <h1 class='text-center text-white'>
          PetShop
        </h1>
    </header>
<div class="container mx-auto">
    <div class="row">
        <div class="col-4 mb-3">
             <div class="card">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrJUIO00xVmwS4OvrElPWdap20JSyEb-A-gQ&usqp=CAU" class="card-img-top" alt="">
               <div class="card-body bg-success text-white">
               <h5 class="card-title"> <strong>Title:</strong></h5>
               <p class="card-text"><strong>Price: </strong></p>
               <p class="card-text"><strong>Category: </strong></p>
               <p class="card-text"> <strong>Type: </strong></p>
             </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!-- // I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). --> 