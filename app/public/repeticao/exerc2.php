<?php

$turma = [
    "A" => [10, 8, 6],
    "B" => [5, 3, 8],
    "C" => [10, 10, 10],
    "D" => [8, 6, 3],
];

foreach ($turma as $nome => $notas) {
    $somaNotas = 0;
    for ($i = 0; $i < count($notas); $i++) {
        $somaNotas += $notas[$i];
    }

    echo "Soma das notas de $nome: $somaNotas <br>";
}
