<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manipulando Formulários</title>
</head>

<body>
    <h1>Formulário Usuário</h1>
    <!-- action - para onde os dados do form serão enviados -->
    <!-- method - como esses dados serão enviados  -->
    <form action="formularioUsuario.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="n"> <br> <br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email"> <br> <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    $nome = $_POST["n"];
    $email = $_POST["email"];

    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    ?>
</body>

</html>