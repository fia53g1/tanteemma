<?php

    /**
     * 
     */
    class ShoppingCart
    {

        public $products = "";
        
        function __construct()
        {
            $this->products = $this->getShoppingCart();
            $this->renderShoppingCart();
        }

        public function getShoppingCart() {

            if( !isset($_COOKIE['warenkorb'])) {

                return false;
            } else {

                return  explode(',', $_COOKIE['warenkorb']);
            }
        }

        public function renderShoppingCart() {

            foreach ($this->products as $key => $value) {
                echo "<ul><li>". $value ." <button onclick='removeProduct(this)'>Löschen</button></li></ul>";
            }

        }
    }
    

?>