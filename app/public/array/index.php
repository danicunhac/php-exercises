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
