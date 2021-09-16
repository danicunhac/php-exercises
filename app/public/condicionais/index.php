<?php

echo "<h1>Condicionais</h1>";

echo "<h2>Condicional simples</h2>";
$media = 6;
if ($media >= 7) {
    echo 'Aprovado!';
}
if ($media < 7) {
    echo "Reprovado!";
}
echo "<br><br>";

echo "<h2>Condicional composta</h2>";
$idade = 18;
if ($idade >= 18) {
    echo "Maior idade";
} else {
    echo "Menor idade";
}
echo "<br><br>";


echo "<h2>Condicional aninhada/encadeada</h2>";
$num = -1;
if ($num > 0) {
    echo "Maior que zero!";
} else if ($num < 0) {
    echo "Menor que zero!";
} else {
    echo "Igual a zero!";
}
echo "<br><br>";

if ($num > 0 || $num < 0) {
    echo "Diferente de zero!";
} else {
    echo "Igual a zero!";
}
