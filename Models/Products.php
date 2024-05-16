<?php

require_once __DIR__ . '/Emporium.php';
require_once __DIR__ . '/../Traits/BrandCustomerService.php';

class Products extends Emporium {

    use BrandCustomerService;

    public $type;
    public $price;


    public function __construct($_name, $_address, $_type, $_price) {
        parent::__construct($_name, $_address);

        $this->type = $_type;
        $this->price = $_price;
        
    } 

}
  
?>