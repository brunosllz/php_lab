<?php

//Números primos
$resultado = [];
$intervalo = 10;

for ($i = 3; $i <= $intervalo; $i++) {
  $divisores = 0;

  for ($j = $i; $j > 1; $j--) {
    if (($i % $j) == 0) {
      $divisores++;
    }
  }

  if ($divisores == 1) {
    $resultado[] = $i;
  }
}

echo "Resultado dos números primos: " . implode(", ",  $resultado);

echo "<br>";

//Números perfeitos
$numero = 1233456;
$divisores = [];
$soma = 0;

for ($i = 1; $i < $numero; $i++) {
  if ($numero % $i == 0) {
    $soma += $i;
    $divisores[] = $i;
  }
}

echo "<br> Numero: $numero, Soma dos divisores: $soma <br>";

if ($soma == $numero) {
  echo "O número é perfeito " . implode(", ", $divisores);
} else {
  echo "O número não é perfeito.\nDivisores: " . implode(", ", $divisores) . "<br>";
}
