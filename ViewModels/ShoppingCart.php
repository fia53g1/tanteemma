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
                $artikelInfo =  explode('#', $value);
                $products = $dbhandle->query("SELECT * FROM ARTIKEL WHERE id=" $value[1]);
                while ($product = $products->fetchArray(SQLITE3_ASSOC)) {
                    echo "<ul><li>". $product["bezeichnung"] ." <button onclick='removeProduct(this)'>Löschen</button></li></ul>";
                }

            }

        }
    }
    

?>