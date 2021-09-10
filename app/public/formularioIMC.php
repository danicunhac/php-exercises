<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulário IMC</title>
</head>

<body>
    <h1>Formulário IMC</h1>
    <!-- action - para onde os dados do form serão enviados -->
    <!-- method - como esses dados serão enviados  -->
    <form action="calcularIMC.php" method="GET">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="n"> <br> <br>
        <label for="peso">Peso: </label>
        <input type="text" id="peso" name="peso"> <br> <br>
        <label for="altura">Altura: </label>
        <input type="text" id="altura" name="altura"> <br> <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>