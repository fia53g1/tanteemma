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
                $cookieValues = explode(',', $_COOKIE['warenkorb']);
                foreach ($cookieValues as $value) {
                  $artikelInfo =  explode('#', $value);
                  $products = $dbhandle->query("SELECT * FROM ARTIKEL WHERE id=" $value[1]);
                  while ($product = $products->fetchArray(SQLITE3_ASSOC)){
                    echo '<div class="produkt" data-id="' . $product["bezeichnung"] . '#' . $product["id"] . '">
                            <p>Bezeichnung: ' . $product["bezeichnung"] . '</p>
                            <p>Preis: ' . $product["preis"] . '€</p>
                            <p>Beschreibung: ' . $product["beschreibung"] . '</p>
                            <p class="atw">In den Warenkorb legen</p>
                          </div>';
                  }
                }
            }
        }
    }
    

?>