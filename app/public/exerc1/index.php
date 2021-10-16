<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Exercício Prova Primeiro Estágio | Formulário</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<style>
  body {
    font-family: 'Open Sans', sans-serif;
  }
</style>

<body>
  <form action="table.php" method="post">
    <p>Valor do carro: <input type="number" name="value" min="0.01" step="0.01" /></p>
    <button type="submit">Calcular</button>
  </form>
</body>

</html>
