<?php

    /**
     * 
     */
    class Order
    {
        
        public $dateTime = '';
        private $orderArray = '';

        function __construct()
        {
            $this->dateTime = date('d.m.Y H:i:s');
            $this->orderArray = array ();
        }

        public function getShoppingCart() {

            if( !isset($_COOKIE['warenkorb'])) {

                return false;
            } else {

                $cookieValue = explode(',', $_COOKIE['warenkorb']);
            }
        }
    }
    

?>