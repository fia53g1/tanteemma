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
    }
    

?>