<!DOCTYPE html>
<html>
  <head>
    <title>Produkt端bersicht</title>
    <meta charset="UTF-8"/>
    <style>
      header {
        height:10vh;
        border-bottom:1px solid black;
      }
      #maincontainer {
        padding:10px;
      }
      .produkt {
        border:1px solid black; 
        float:left;
        width:175px;
        height:200px;
        margin:10px
      }
      #produktliste:after {
        display:block;
        visibility:hidden;
        clear:both;
      }
    </style>
  </head>
  <body>
    <header>
      <form action="../Views/ProductPage.php">
        <input type="submit" value="Startseite">
      </form>
    </header>
    <div id="maincontainer">
      
        <div id="shoppingCart">

            <?php
                include('../ViewModels/ShoppingCart.php');

                $shoppingCart = new ShoppingCart();
            ?>


            <form action="../Views/CheckoutPage.php">
              
              <input type="submit" value="Zur Kasse gehen">
            </form>
        </div>
      
    </div>
    <script>
      function removeProduct(button) {
        var product = button.parentNode;
        product.parentNode.removeChild(product); 
      }
    </script>
  </body>
</html>
