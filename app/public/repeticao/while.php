<?php

$precos = [50, 25.50, 10.50, 100, 250, 380];

$contador = 0;
while ($precos[$contador] < 100) {
    echo "$precos[$contador] <br>";
    $contador++;
}


do {
    echo "$precos[$contador] <br>";
    $contador++;
} while ($precos[$contador] < 100);

echo "Fim da aplicação! <br>";
