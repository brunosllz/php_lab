<?php

$numeros = [35, 70, 1, 9, 6, 25, 12];
$numeros_print = $numeros;

for ($i = 0; $i < count($numeros); $i++) {
  for ($j = 0; $j < count($numeros); $j++) {
    if ($numeros[$i] < $numeros[$j]) {
      $ordenador = $numeros[$i];
      $numeros[$i] = $numeros[$j];
      $numeros[$j] = $ordenador;
    }
  }
}

echo "Array inicial: " . implode(", ", $numeros_print) . " | Array ordenado: " . implode(", ", $numeros);
