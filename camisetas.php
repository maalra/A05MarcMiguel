<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> A05 </title>
  </head>
  <body>
        <?php
        //GETTERS
        include "camis.php";
        $talla = new camis();
        $talla -> gettalla();
        $marca = new camis();
        $marca -> getmarca();
        $color = new camis();
        $color -> getcolor();
        $modelo = new camis();
        $modelo -> getmodelo();
//SETTERS
        $talla ->settalla("M ");
        echo "<br> talla: " .$talla->gettalla();
        $marca ->setmarca("nike ");
        echo "<br> marca: " .$marca->getmarca();
        $color ->setcolor("rojo ");
        echo "<br> color: " .$color->getcolor();
        $modelo ->setmodelo("corta ");
        echo "<br> modelo: " .$modelo->getmodelo();
         ?>
    </body>
</html>
