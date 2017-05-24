<!DOCTYPE html>
<html>
  <head>
    <title>Produktübersicht</title>
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
    </header>
    <div id="maincontainer">

        <button>Lade Anschrift</button>

        <form action="checkout.php">
 
            <h2>Liefer-/Rechnungsanschrift</h2>
            <input type="text" name="surname" placeholder="Name">
            <input type="text" name="forname" placeholder="Vorname">
            <input type="text" name="street" placeholder="Straße">
            <input type="text" name="number" placeholder="Hausnummer">
            <input type="text" name="city" placeholder="Ort">
            <input type="text" name="plz" placeholder="PLZ">

            <input type="submit" value="Weiter">
        </form>

    </div>
  </body>
</html>
