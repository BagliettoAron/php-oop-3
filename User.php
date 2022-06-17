<?php

require_once __DIR__ . '/index.php';
require_once __DIR__ . '/Adress.php';

class User {
    use Adress;
    public $name;
    public $email = '';
    public $cart = [];
    private $discount;
    private $credit_car_expire_date;

    public function addToCart($_product) {
        if($_product->disponibile) {
            $this -> cart[] = $_product;
            return true;
        } else {
            throw new Exception ('prodotto non disponibile');
        }
        
        
    }

    public function totalPrice() {
        $total_price = 0;
        foreach ($this->cart as $boughtProduct) {
            $total_price += $boughtProduct->price;
        }
        if ($this->userRegistered()) {
            $total_price = $total_price * 0.8;
        }
        return $total_price;
    }

    public function userRegistered() {
        if ($this -> email && $this->name) {
            return true;   
        } else {
            return false;
        }
    }

    public function userDataRegistered($_name, $_email) {
        $this -> name = $_name;
        $this->email = $_email;
    }

    public function paymentMethod ($_payment) {
        $this-> payment = $_payment;
    }

    


}
?>