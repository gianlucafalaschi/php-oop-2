<?php

class Emporium {
    public $name;
    public $address;
    protected $genre;
    public $year;
    protected $category;


// COSTRUTTORE (viene chiamata con new, usato spesso quando voglio dare degli attributi obbligatori, 
//che scrivo negli argomenti della funzione in questo caso $_title, $_genre )
public function __construct($_name, $_address, $_category) {
    $this->name = $_name;
    $this->address = $_address;
    $this->category = $_category;
} 

// Funzione che da il nome e l'anno
/* public function getMovieTitleAndYear() {
    return 'Titolo del film:' . ' ' .  $this->title . '<br> ' . 'Anno del film:' . ' ' . $this->year; 
} */

    // getter
    public function getGenre() {
        return $this->genre;
    }

}

// creo un new Movie e fornisco gli attributi obbligatori del construct ($_title, $_genre)
$emporium = new Emporium('La casa degli animali', 'via degli Alberi 5', 'Gatto');

$emporium->genre = 'Negozio di animali';
$emporium->year = 2000;



var_dump($emporium);

?>

