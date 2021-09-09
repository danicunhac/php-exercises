<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Dados</title>
</head>

<body>
    <?php
    $nome = $_POST["n"];
    $email = $_POST["email"];

    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    ?>
</body>

</html>