<?php

require_once __DIR__ . '/Emporium.php';


class Products extends Emporium {
    public $type;
    public $price;


    public function __construct($_name, $_address, $_type, $_price) {
        var_dump('sono il costruttore di Products');
        $this->name = $_name;
        $this->address = $_address;
        $this->type = $_type;
        $this->price = $_price;
        
    } 

}
  
?>