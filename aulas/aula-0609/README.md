<h1 align="center"> Ordenação de crescente de um array e Descobrir se a palavra é palindrome</h1>

<p>
 ...
</p>

<br/>

## Ordenação de crescente de um array

<p>
...
</p>

<br/>

```php
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

```

---

<br/>

## Descobrir se a palavra é palindrome

<p>
...
<p>


```php
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
```
