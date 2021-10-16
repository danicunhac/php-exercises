<?php
$produtos = [
  "produtoA" => 50.0,
  "produtoB" => 150.0,
  "produtoC" => 60.0,
  "produtoD" => 80.0,
  "produtoE" => 120.0,
  "produtoF" => 15.0,
  "produtoG" => 25.0,
  "produtoH" => 35.0,
  "produtoI" => 40.0
];

function getCheapCount($produtos)
{
  $array = [];

  foreach ($produtos as $produto => $valor) {
    if ($valor < 50) {
      $array[] = $produto;
    }
  }

  return count($array);
}

echo  "<p>Quantidade de produtos com o preço inferior a R$50,00: </p>";
echo getCheapCount($produtos);

function getBetweenCount($produtos)
{
  $array = [];

  foreach ($produtos as $produto => $valor) {
    if ($valor > 50 && $valor < 100) {
      $array[] = $produto;
    }
  }

  return count($array);
}

echo "<br>";

echo "<p>O nome dos produtos com preço entre R$ 50,00 e R$100,00:</p>";
echo getBetweenCount($produtos);

function getExpensiveAverageCount($produtos)
{
  $expensiveValues = 0;
  $expensiveCount = 0;

  foreach ($produtos as $produto => $valor) {
    if ($valor > 100) {
      $expensiveValues += $valor;
      $expensiveCount++;
    }
  }

  return $expensiveValues / $expensiveCount;
}

echo "<br>";

echo "<p>A média dos preços dos produtos com preço superior a R$ 100,00:</p>";
echo getExpensiveAverageCount($produtos);
