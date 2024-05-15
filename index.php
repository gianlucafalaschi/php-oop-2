<?php

require_once __DIR__ . '/Models/Emporium.php';
require_once __DIR__ . '/Models/Products.php';

// creo un new Emporium e fornisco gli attributi obbligatori del construct 
$emporium = new Emporium('La casa degli animali', 'via degli Alberi 5');
// $genre e' protected quindi per settarlo devo passare attraverso la funzione
$emporium->setGenre('Negozio di animali');
$emporium->year = 2000;
// $category e' protected quindi per settarlo devo passare attraverso la funzione
$emporium->setCategory('Gatti');


var_dump($emporium);

$products = new Products('La casa degli animali', 'via degli Alberi 5', 'Crocchette', 15);
$products->brand = 'Nutrix';

var_dump($products);
?>

