<?php

class Emporium {
    public $name;
    public $address;
    protected $genre;
    public $foundationYear;
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

    // getter   torna il valore di genre 
    public function getGenre() {
        return $this->genre;
    }


    // setter   setta  il valore di genre 
    public function setGenre($newGenre) {
    $this->genre = $newGenre;
    }
    
    // getter    torna il valore di category 
    public function getCategory() {
        return $this->category;
    }


    // setter setta il valore di category 
    public function setCategory($newCategory) {
    $this->category = $newCategory;
    }


}


?>