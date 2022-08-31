<?php

//Soma dos pares

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$soma = 0;

foreach ($numeros as $numero) {
  if ($numero % 2 === 0) {;
    $soma += $numero;
  }
}

echo "A soma dos pares é: $soma";

//Calcular  o MDC

$numero = 48;
$numero_print = $numero;
$divisor = 30;
$divisor_print = $divisor;

$resultado;

do {
  $resultado = $numero % $divisor;
  $numero = $divisor;
  $divisor = $resultado;
} while ($resultado !== 0);

echo "<br/> O MDC de $numero_print e $divisor_print = $numero";

//Conversao de binario para decimal

$numero = [1, 0, 1, 0, 0];
$tamanho = count($numero);
$base;

for ($i = 0; $i < $tamanho; $i++) {
  $potencia = pow($i - ($tamanho - 1), 2);
  $base += $numero[$i] * $potencia;
}

// var_dump($base);

//Conversao de decimal para binario