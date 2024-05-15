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


$products = [
    $kibble,
    $kennel,
    $mouse,
    $fleaCollar
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--/  Bootstrap -->
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) { ?><div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->type ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $product->price ?> Euro</li>
                        <li class="list-group-item"><?php echo $product->name ?></li>
                        <li class="list-group-item"><?php echo $product->address ?></li>
                        <li class="list-group-item"><?php echo $product->getGenre() ?></li>
                        <li class="list-group-item">Anno di fondazione: <?php echo $product->foundationYear ?></li>
                        <li class="list-group-item"><?php echo $product->getCategory() ?></li>
                        
                    </ul>
                </div>
            </div> <?php } ?>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>