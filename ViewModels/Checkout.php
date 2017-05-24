<?php

include('Models/Order.php');

 /**
  * Checkout Klasse behandelt den Buchungsprozess
  */
 class Checkout
 {
     private $order;

     function __construct() {
         
        $this->order = new Order();

        $this->startCheckout();
     }

     function startCheckout() {


        $this->order->getShoppingCart();
     }  
 }
 ?>