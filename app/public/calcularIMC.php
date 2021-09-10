<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
</head>

<body>
    <?php
    $nome = $_GET["n"];
    $peso = $_GET["peso"];
    $altura = $_GET["altura"];

    $imc = $peso / ($altura * $altura);

    echo "<p>Nome: $nome</p>";
    echo "<p>IMC: $imc</p>";
    ?>
</body>

</html>