<?php

$resultado = [];
$intervalo = 50;

for ($i = 1; $i <= $intervalo; $i++) {
  $divisores = 0;

  for ($j = $i; $j >= 1; $j--) {
    if (($i % $j) == 0) {
      $divisores++;
    }
  }

  if ($divisores == 2) {
    $resultado[] = $i;
  }
}

echo "Resultado dos números primos: " . implode(", ",  $resultado);

echo "<br>";

$numero = 1233456;
$divisores = array();
$soma = 0;

for ($i = 1; $i < $numero; $i++) {
  if ($numero % $i == 0) {
    $soma += $i;
    array_push($divisores, $i);
  }
}

echo "<br> Numero: $numero, Soma dos divisores: $soma <br>";

if ($soma == $numero) {
  echo "O número é perfeito " . implode(", ", $divisores);
} else {
  echo "O número não é perfeito.\nDivisores: " . implode(", ", $divisores) . "<br>";
}
