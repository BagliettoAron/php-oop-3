<?php
    require_once __DIR__ . '/Product.php';

    class Collare extends Product {
        public function __construct($_name,$_price, $_animal_species, $_ratings) {
        parent::__construct($_name,$_price, $_weight = '', $_animal_species, $_ratings);
       }
        
    }
?>