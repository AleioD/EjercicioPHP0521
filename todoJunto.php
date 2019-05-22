<?php
  $funcionesEjecutadas = 0;
  include_once "funciones.php";
  include_once "superficie.php";


  function radioMayorCirculos($radio1, $radio2, $radio3){
    return mayor(circulo($radio1), circulo($radio2), circulo($radio3));
  }

  echo radioMayorCirculos (10, 5, 8);
  echo "<br>";
  echo rectangulo(2,4);
  echo "<br>";
  echo $funcionesEjecutadas;
  echo "<hr>";
  $pos = strpos("Me encanta php, a mi también me encanta php!", "php");
  echo $pos;


 ?>
