<h1 align="center"> Números primos e perfeitos </h1>

<p>
  A atividade proposta era descobrir os numeros primos em um determinado intervalo e calcular o número perfeito.
</p>

<br/>

## Números Primos

<p>
Um número é considerado primo quando é divisível por 1 e por ele mesmo.

Seguindo este princípio montei está estrutura onde mostra os números primos de um derteminado intervalo.
</p>

<br/>

```php
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
```

<br/>

### 💻 Refactoring números primos

  <img alt="refactoring" title="#refactoring" src="https://github.com/brunosllz/php_lab/blob/main/aulas/aula-2308/assets/refactoring.png" width="500px" />

  <br/>
  
  <p>
    Código refatorado depois do feeedback.
  </p>

  ```php
  $resultado = [];
  $intervalo = 1000;

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
```
---

<br/>

## Números Perfeitos

<p>
Um número se diz perfeito se é igual à soma de seus divisores próprios. Divisores próprios de um número positivo N são todos os divisores inteiros positivos de N exceto o próprio N. Por exemplo, o número 6, seus divisores próprios são 1, 2 e 3, cuja soma é igual à 6.

Seguindo este princípio montei está estrutura onde mostra se o número informa é perfeito ou não.
<p>


```php
// n = O númeoro que deseja saber se é perfeito
numero = n;
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

```
