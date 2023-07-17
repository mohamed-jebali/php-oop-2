<?php

include_once __DIR__."/../models/food.php";
include_once __DIR__."/../models/toys.php";
include_once __DIR__."/../models/category.php";
include_once __DIR__."/../models/pet_kennel.php";
include_once __DIR__."/../models/products.php";


$dogitems = new Category ("for your Dog","https://cdn-icons-png.flaticon.com/512/620/620851.png");
$catitems = new Category ("for your Cat","https://cdn-icons-png.flaticon.com/512/220/220124.png");

$monkey_toy = new Toys ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrJUIO00xVmwS4OvrElPWdap20JSyEb-A-gQ&usqp=CAU","Monkey Toy",15.55,$catitems,"Brown","Cotton");


$doggy_house = new PetKennel ("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1775607824","Doggy House",50.45,$dogitems,"100 cm x 50cm x 110 cm","Wood");


$whiskas_food = new Food ("https://fera24.it/images/thumbnails/960/1214/detailed/129/5998749144213F1.jpg","Whiskas",20.99,$catitems,110.10,"crunchy");



$list_products = [
    $monkey_toy,
    $doggy_house,
    $whiskas_food,
];