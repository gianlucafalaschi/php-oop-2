<?php

require_once __DIR__ . '/Models/Emporium.php';
require_once __DIR__ . '/Models/Products.php';

// creo un new Emporium e fornisco gli attributi obbligatori del construct 
$emporium = new Emporium('La casa degli animali', 'via degli Alberi 5');
// $genre e' protected quindi per settarlo devo passare attraverso la funzione
$emporium->setGenre('Negozio di animali');
$emporium->foundationYear = 2000;
// $category e' protected quindi per settarlo devo passare attraverso la funzione
$emporium->setCategory('Gatti');


var_dump($emporium);

$kibble = new Products('La casa degli animali', 'via degli Alberi 5', 'Crocchette', 15);
$kibble->setGenre('Negozio di animali');
$kibble->foundationYear = 2000;
$kibble->setCategory('Gatti');

var_dump($kibble);

$kennel = new Products('La casa degli animali', 'via degli Alberi 5', 'Cuccia', 30);
$kennel->setGenre('Negozio di animali');
$kennel->foundationYear = 2000;
$kennel->setCategory('Gatti');

var_dump($kennel);

$mouse = new Products('La casa degli animali', 'via degli Alberi 5', 'Topo giocattolo', 20);
$mouse->setGenre('Negozio di animali');
$mouse->foundationYear = 2000;
$mouse->setCategory('Gatti');

var_dump($mouse);

$fleaCollar = new Products('La casa degli animali', 'via degli Alberi 5', 'Collare Antipulci', 10);
$fleaCollar->setGenre('Negozio di animali');
$fleaCollar->foundationYear = 2000;
$fleaCollar->setCategory('Gatti');

var_dump($fleaCollar);

?>

