<?php

include_once __DIR__."/../models/food.php";
include_once __DIR__."/../models/toys.php";
include_once __DIR__."/../models/category.php";
include_once __DIR__."/../models/pet_kennel.php";
include_once __DIR__."/../models/products.php";


$dogitems = new Category ("for your Dog","https://cdn-icons-png.flaticon.com/512/620/620851.png");
$catitems = new Category ("for your Cat","https://cdn-icons-png.flaticon.com/512/220/220124.png");

$monkey_toy = new Products ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrJUIO00xVmwS4OvrElPWdap20JSyEb-A-gQ&usqp=CAU","Monkey Toy",15.55,$catitems);


$doggy_house = new Products ("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1775607824","Doggy House",50.45,$dogitems);


$whiskas_food = new Products ("https://fera24.it/images/thumbnails/960/1214/detailed/129/5998749144213F1.jpg","Whiskas",20.99,$catitems);


$list_products = [
    $monkey_toy,
    $doggy_house,
    $whiskas_food,
];