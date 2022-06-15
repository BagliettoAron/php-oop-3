<?php

class Utente {
    public $name;
    public $email = '';
    public $cart = [];
    private $discount;
    private $credit_car_expire_date;

    function __construct($_name, $_email, $_cart, $_discount, $_credit_car_expire_date ) {
        $this->name = $_name;
        $this->email = $_email = '';
        $this->cart = $_cart;
        $this ->discount = $_discount;
        $this -> credit_car_expire_date = $_credit_car_expire_date;
    }

    function addToCart($_product) {
        $this -> cart[] = $_product;
    }

    function discount($_email) {

        if ($_email) {
            $this -> discount = 20;
        } else {
            $this -> discount =  0;
        }
    }

    function totalPrice($_discount) {
        $total_price = 0;
        foreach($this->cart as $item) {
            $total_price += $item->prezzo;
        }
        return ($total_price * 100) / $_discount;
    }


}
?>