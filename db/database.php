<?php

include_once __DIR__."/../models/food.php";
include_once __DIR__."/../models/toys.php";
include_once __DIR__."/../models/category.php";
include_once __DIR__."/../models/pet_kennel.php";
include_once __DIR__."/../models/products.php";


$dogitems = new Category ("for your Dog","https://cdn-icons-png.flaticon.com/512/620/620851.png");
$campingitems = new Category ("for Camping","https://www.freeiconspng.com/thumbs/camping-icon/travel-camping-tent-icon-1.png");
$catitems = new Category ("for your Cat","https://cdn-icons-png.flaticon.com/512/220/220124.png");

$monkey_toy = new Toys ("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrJUIO00xVmwS4OvrElPWdap20JSyEb-A-gQ&usqp=CAU","Monkey Toy",15.55,$catitems,"Brown","Cotton");

$bone_toy = new Toys ("https://shop-cdn-m.mediazs.com/bilder/osso/gioco/in/tpr/per/cani/6/800/261400_tpr_bone_110_01_6.jpg","Bone Toy",7.55,$dogitems,"Pink","Plastic");


$doggy_house = new PetKennel ("https://arcaplanet.vtexassets.com/arquivos/ids/227610/p-a-y--cuccia-alcazar-70.jpg?v=1775607824","Doggy House",50.45,$dogitems,"100 cm x 50cm x 110 cm","Wood");


$caesar_food = new Food ("https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1662823176/products/pim/3065890114128_CesarSel_dell'ortoPolloVerdurer_8366_IT/cesar-cibo-umido-per-cani-con-pollo-e-verdure-selezioni-dell-orto","caesar",4.99,$dogitems,70.20,"humid");
$whiskas_food = new Food ("https://fera24.it/images/thumbnails/960/1214/detailed/129/5998749144213F1.jpg","Whiskas",20.99,$catitems,110.10,"crunchy");

$camp = new Products ("https://contents.mediadecathlon.com/p1259581/k$47977d533ae46915ab592bab64ec7153","Quechua Camp",22.99,$campingitems);



$list_products = [
    $monkey_toy,
    $doggy_house,
    $whiskas_food,
    $camp,
    $caesar_food,
    $bone_toy
];