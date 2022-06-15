<?php
require_once __DIR__ . '/Product.php';

class Cibo extends Product {
    public $kind_of_food;

    function __construct($_price, $_weight, $_animal_species, $_ratings, $_kind_of_food) {
        parent::__construct($_price, $_weight, $_animal_species, $_ratings);
        $this->kind_of_food = $_kind_of_food;
    }
}
?>