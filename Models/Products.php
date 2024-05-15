<?php

require_once __DIR__ . '/Emporium.php';


class Products extends Emporium {
    public $type;
    public $price;


    public function __construct($_name, $_address, $_type, $_price) {
        parent::__construct($_name, $_address);

        $this->type = $_type;
        $this->price = $_price;
        
    } 

}
  
?>