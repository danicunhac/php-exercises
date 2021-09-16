<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Comissão</title>
</head>

<body>
    <h1>Calculando Comissão</h1>
    <?php
    $salario = (float) $_GET["salario"];
    $totalVendas = (float) $_GET["vendas"];

    $comissao = $totalVendas *  (10 / 100);

    $novoSalario = $salario + $comissao;

    echo 'Novo salário ', $novoSalario
    ?>
</body>

</html>