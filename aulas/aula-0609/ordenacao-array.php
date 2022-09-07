<?php

//Ordenação crescrente do array
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

echo "Array inicial: " . implode(", ", $numeros_print) . " | Array ordenado: " . implode(", ", $numeros) . "<br/>";

//Descubrir se a palavra é palindromo

$palavra = "ana";
$array_palavra = str_split($palavra);
$palavra_invertida = [];

for ($i = (count($array_palavra) - 1); $i >= 0; $i--) {
  $palavra_invertida[] = $array_palavra[$i];
}

if (implode('', $array_palavra) === implode('', $palavra_invertida)) {
  echo "A palavra $palavra é palindromo";
} else {
  echo "A palavra: $palavra  não é palindromo";
}
