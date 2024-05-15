<?php

require_once __DIR__ . '/Models/Emporium.php';
require_once __DIR__ . '/Models/Products.php';

// creo un new Emporium e fornisco gli attributi obbligatori del construct 
$emporium = new Emporium('La casa degli animali', 'via degli Alberi 5');

$emporium->setGenre('Negozio di animali');
$emporium->year = 2000;
$emporium->setCategory('Gatti');


var_dump($emporium);

$products = new Products();
$products->brand = 'Nutrix';

var_dump($products);
?>

