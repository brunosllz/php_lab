<h1 align="center"> Soma dos pares em um array, Calcular  o MDC, Conversão de binário para decimal e Conversão de decimal para binário</h1>

<p>
 ...
</p>

<br/>

## Soma dos pares em um array

<p>
...
</p>

<br/>

```php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$soma = 0;

foreach ($numeros as $numero) {
  if ($numero % 2 === 0) {
    $soma = $soma + $numero;
  }
}

echo "A soma dos pares é: $soma";
```

---

<br/>

## Calcular  o MDC

<p>
...
<p>


```php
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
```

---

<br/>

## Conversão de binário para decimal

<p>
...
<p>


```php
$numero = [1, 0, 1, 0, 0];
$tamanho = count($numero);
$base;

for ($i = 0; $i < $tamanho; $i++) {
  $potencia = pow($i - ($tamanho - 1), 2);
  $base += $numero[$i] * $potencia;
}

echo "<br/>  Número em binário: " . implode("", $numero) . " | Número decimal: $base";
```

---

<br/>

## Conversão de decimal para binário

<p>
...
<p>


```php
$numero = 30;
$numero_print = $numero;
$restos = [];
$dividendo;
$restos_ord = [];

do {
  $dividendo = $numero;
  $restos[] = $dividendo % 2;
  $numero = $dividendo / 2;
} while ($dividendo > 2);

for ($i = (count($restos) - 1); $i >= 0; $i--) {
  $restos_ord[] = $restos[$i];
}

echo "<br/> Número em decimal: $numero_print | Número binário: " . implode("", $restos_ord);
```
