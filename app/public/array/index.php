<?php

echo ('<h2>Declarativo</h2>');
$idades = [52, 18, 65, 98];

echo "$idades[0] <br>";
echo "$idades[1] <br>";
echo "$idades[2] <br>";
echo "$idades[3] <br>";

// Matriz
$matriz1 = [
  [5, 30],
  [65, 25]
];

$matriz2 = [
  [5, 30],
  [65, 25]
];

echo ("<br>");
echo ("<h2>Matriz</h2>");
echo ($matriz1[1][0] + $matriz2[0][1] . "<br>");

echo ("<br>");
echo ("<h2>Associativo</h2>");

// Associativo
$alunos = [
  20210050 => "Maria",
  20200054 => "José",
  20215487 => "Pedro"
];

echo $alunos[20215487];

echo ("<br>");

echo ("<h2>Exercício 1</h2>");

$estados = array("Paraíba", "Pernambuco", "Ceará", "Rio de Janeiro", "São Paulo");

echo ($estados[3]);

echo "<br>";

echo "<h2>Prova Estágio 1 </h2>";

$array = [
  "Joao" => ["total_vendas" => 2000, "porcentagem" => 15],
  "Maria" => ["total_vendas" => 3500, "porcentagem" => 10],
  "Aline" => ["total_vendas" => 4000, "porcentagem" => 5],
  "Matilda" => ["total_vendas" => 1500, "porcentagem" => 25],
];

function getPersonAndValue($array)
{
  foreach ($array as $pessoa => $dados) {
    echo ("$pessoa: R$" . $dados['total_vendas'] * $dados['porcentagem'] / 100);
    echo "<br>";
  }
}

function getSum($array)
{
  $sum = 0;
  foreach ($array as $pessoa => $dados) {
    $sum += $dados['total_vendas'];
  }
  echo "Soma total das vendas: R$$sum";
  echo "<br>";
}

getPersonAndValue($array);
getSum($array);
