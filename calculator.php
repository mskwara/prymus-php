<?php

$op = $_GET['op'] ?? 'sum';
$x = $_GET['x'] ?? 0;
$y = $_GET['y'] ?? 0;
if(is_numeric($x) && is_numeric($y)){
  if($op == 'sum'){
    $wynik = $x + $y;
    echo "<h1>$x + $y = $wynik</h1>";
  }
  else if($op == 'subtract'){
    $wynik = $x - $y;
    echo "<h1>$x - $y = $wynik</h1>";
  }
  else if($op == 'multiply'){
    $wynik = $x * $y;
    echo "<h1>$x * $y = $wynik</h1>";
  }
  else if($op == 'divide'){
    if($y != 0){
      $wynik = $x / $y;
    }
    else {
      $wynik = 'Nie dziel przez zero!';
    }
    echo "<h1>$x / $y = $wynik</h1>";
  }
  else {
    echo "<h1>Błędny operator: $op</h1>";
  }
}
else {
  echo "<h1>Błędne dane</h1>";
}
