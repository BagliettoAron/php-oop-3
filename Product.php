

<?php 

require_once __DIR__ . '/index.php';
    class Product {
        public $name;
        public $price;
        public $weight;
        public $animal_species;
        public $ratings;

        public function __construct($_name, $_price, $_weight, $_animal_species, $_ratings) {
            $this->name = $_name;
            $this->price = $_price;
            $this->weight = $_weight;
            $this->animal_species = $_animal_species;
            $this->ratings = $_ratings;
        }

        public function printProduct() {
            return "Prodotto: $this->name Prezzo: $this->price € Voto degli Utenti: $this->ratings / 5";
        }
    }

?>