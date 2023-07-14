<!-- esercizio di oggi: :gandalf: PHP OOP 2 :php:
nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->

<?php

include_once __DIR__.'/classes/products.php';

class Shop {
    public $address;
    public $website;

    public function __construct(String $address,String $website) {
        $this->address = $address;
        $this->website = $website;
    }
}


$monkey_toy = new Products ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrJUIO00xVmwS4OvrElPWdap20JSyEb-A-gQ&usqp=CAU","Monkey Toy",15.55,"https://cdn-icons-png.flaticon.com/512/220/220124.png","Toys");


$doggy_house = new Products ("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1775607824","Doggy House",50.45,"https://cdn-icons-png.flaticon.com/512/620/620851.png","pet_kennel");


$whiskas_food = new Products ("https://fera24.it/images/thumbnails/960/1214/detailed/129/5998749144213F1.jpg","Whiskas",20.99,"https://cdn-icons-png.flaticon.com/512/220/220124.png","Food");




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2 PetShop</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1581/1581622.png">
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
             <img src="<?php echo $monkey_toy->img; ?>" class="card-img-top" alt="<?php $monkey_toy->title;?>">
               <div class="card-body bg-success text-white">
               <h5 class="card-title"> <strong>Title: </strong><?php echo $monkey_toy->title ;?></h5>
               <h5 class="card-text"><strong>Price: </strong> <?php echo $monkey_toy->price . " €" ;?> </h5>
               <img src="<?php echo $monkey_toy->category; ?>" class="card-icon" alt="<?php $monkey_toy->title;?>">
               <p class="card-text"> <strong>Type: </strong> <?php echo $monkey_toy->type;?> </p>
             </div>
            </div>
        </div>
        <div class="col-4 mb-3">
             <div class="card">
             <img src="<?php echo $doggy_house->img; ?>" class="card-img-top" alt="<?php $doggy_house->title;?>">
               <div class="card-body bg-success text-white">
               <h5 class="card-title"> <strong>Title: </strong><?php echo $doggy_house->title ;?></h5>
               <h5 class="card-text"><strong>Price: </strong> <?php echo $doggy_house->price . " €" ;?> </h5>
               <img src="<?php echo $doggy_house->category; ?>" class="card-icon" alt="<?php $doggy_house->title;?>">
               <p class="card-text"> <strong>Type: </strong> <?php echo $doggy_house->type;?> </p>
             </div>
            </div>
        </div>
        <div class="col-4 mb-3">
             <div class="card">
             <img src="<?php echo $whiskas_food->img; ?>" class="card-img-top" alt="<?php $whiskas_food->title;?>">
               <div class="card-body bg-success text-white">
               <h5 class="card-title"> <strong>Title: </strong><?php echo $whiskas_food->title ;?></h5>
               <h5 class="card-text"><strong>Price: </strong> <?php echo $whiskas_food->price . " €" ;?> </h5>
               <img src="<?php echo $whiskas_food->category; ?>" class="card-icon" alt="<?php $whiskas_food->title;?>">
               <p class="card-text"> <strong>Type: </strong> <?php echo $whiskas_food->type;?> </p>
             </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>