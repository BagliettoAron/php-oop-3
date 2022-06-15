

<?php 
    class Product {
        public $price;
        public $weight;
        public $animal_species;
        public $ratings;

        function __construct($_price, $_weight, $_animal_species, $_ratings) {
            $this->price = $_price;
            $this->weight = $_weight;
            $this->animal_species = $_animal_species;
            $this->ratings = $_ratings;
        }
    }

?>