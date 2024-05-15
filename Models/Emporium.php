<?php

class Emporium {
    public $name;
    public $address;
    protected $genre;
    public $year;
    protected $category;


// COSTRUTTORE (viene chiamata con new, usato spesso quando voglio dare degli attributi obbligatori, 
//che scrivo negli argomenti della funzione
public function __construct($_name, $_address) {
    $this->name = $_name;
    $this->address = $_address;
    
} 

// Funzione che da il nome e l'anno
/* public function getMovieTitleAndYear() {
    return 'Titolo del film:' . ' ' .  $this->title . '<br> ' . 'Anno del film:' . ' ' . $this->year; 
} */

    // getter
    public function getGenre() {
        return $this->genre;
    }


    // setter
    public function setGenre($newGenre) {
    $this->genre = $newGenre;
    }
    
    // getter
    public function getCategory() {
        return $this->category;
    }


    // setter
    public function setCategory($newCategory) {
    $this->category = $newCategory;
    }


}


?>