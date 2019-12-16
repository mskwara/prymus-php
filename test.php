<?php
$name = $_GET['name'] ?? 'Nieznajomy';
$count = $_GET['count'] ?? 1;

for($i = 1 ; $i <= $count ; $i++){
  echo "<h$i>Hello $name!</h$i>";
}
