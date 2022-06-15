<?php
    require_once __DIR__ . '/Product.php';

    class Gioco extends Product{
        function __construct($_price, $_animal_species, $_ratings) {
            parent::__construct($_price, $_weight = '', $_animal_species, $_ratings);    
        }
        
    }
?>