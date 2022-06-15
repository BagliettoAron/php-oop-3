<?php
    class CreditCard {
        public $card_number;
        public $expiration_date;
        public $cvc_number;

        function _construct($_card_number, $_expiration_date, $_cvc_number) {
            $this->card_number = $_card_number;
            $this->expiration_date = $_expiration_date;
            $this->cvc_number = $_cvc_number; 
        }
    }
?>