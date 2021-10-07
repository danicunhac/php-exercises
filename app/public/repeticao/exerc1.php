<?php

$precos = [10.50, 50, 35, 58, 65, 99.9, 105, 305, 2.50];

$acumPrecos = 0;
$maiorPreco = PHP_FLOAT_MIN;
for ($i = 0; $i < count($precos); $i++) {
    $acumPrecos += $precos[$i];
    if ($precos[$i] > $maiorPreco) {
        $maiorPreco = $precos[$i];
    }
}

$media = $acumPrecos / count($precos);

echo "Soma total de preços: $acumPrecos <br>";
echo "Média de preços: $media <br>";
echo "Maior preço: $maiorPreco <br>";
