<?php
  include 'header.php';
>
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
      <div id="produktliste">
        <?php
          $products = $dbhandle->query("SELECT id FROM Artikel");
          error_log(var_export($products, true));
        ?> 
        <div class="produkt" id="produkt1">
          <p>Produkt1</p>
          <p><a class="atw">In den Warenkorb legen</a></p>
        </div>
         <div class="produkt" id="produkt2">
          <p>Produkt1</p>
          <p><a class="atw">In den Warenkorb legen</a></p>
        </div>
        <div class="produkt" id="produkt3">
          <p>Produkt1</p>
          <p><a class="atw">In den Warenkorb legen</a></p>
        </div>
      </div>
    </div>
    <script>
      var
        cookiename = "warenkorb"
      ;
      (function() {
        var
          addWKElems = document.getElementsByClassName("atw")
        , length = addWKElems.length
        , i
        ;
        for (i = 0; i < length; i++)  {
          addWKElems[i].addEventListener("click", function(el) {
            addToCookie(this);
          });
        }
      })();

      function addToCookie(el) {
        var
          parentEL = el.parentElement.parentElement
        , prdktID = parentEL.getAttribute("id")
        , valueArr = getCookie("warenkorb") ? getCookie("warenkorb").split(",") : []   
        , value = ""
        , datum = new Date()
        , expires = "; expires=" + datum.setMonth(datum.getMonth() + 1)
        ;
        /* falls cookie noch nicht vorhanden */
        if (valueArr.indexOf(prdktID) === -1) {
          valueArr.push(prdktID);
        }
        value = valueArr.join(",");
        /* set cookie */
        document.cookie = cookiename + "=" + value + expires + ";path=/";
      }
      function getCookie(name) {
        var
          re = new RegExp(name + "=([^;]+)")
        , value = re.exec(document.cookie)
        ;
        return (value != null) ? unescape(value[1]) : null;
      }
    </script>
  </body>
</html>
