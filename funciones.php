<?php
  function mayor($num1, $num2, $num3){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    } if ($num2 > $num1 && $num2 > $num3) {
      return $num2;
    } else {
      return $num3;
    }
  }

  function tabla($base, $limite){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($base > $limite) {
      $var = $limite;
      $limite = $base;
      $base = $var;
    }
    for ($i=$base; $i <= $limite ; $i++) {
      $array[] = $base;
      $base++;
    }
    return $array;
  }

  function mayor2($num1, $num2, $num3 = 100){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($num1 > $num2 && $num1 > $num3) {
      return $num1;
    } if ($num2 > $num1 && $num2 > $num3) {
      return $num2;
    } else {
      return $num3;
    }
  }

  function tabla2($base, $limite = 100){
    global $funcionesEjecutadas;
    $funcionesEjecutadas++;
    if ($base > $limite) {
      $var = $limite;
      $limite = $base;
      $base = $var;
    }
    for ($i=$base; $i <= $limite ; $i++) {
      $array[] = $base;
      $base++;
    }
    return $array;
  }

 ?>
