<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Exercício Prova Primeiro Estágio | Tabela</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<style>
  body {
    font-family: 'Open Sans', sans-serif;
  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 0.25rem;
    text-align: center;
  }
</style>

<body>
  <h1>Tabela de Preços</h1>
  <?php
  $value = (float) $_POST["value"];

  $data = [
    1 => 0,
    6 => 3,
    12 => 6,
    18 => 9,
    24 => 12,
    30 => 15,
    36 => 18,
    42 => 21,
    48 => 24,
    54 => 27,
    60 => 30
  ];
  ?>
  <table>
    <tr>
      <th>Valor Final</th>
      <th>Quantidade de Parcelas</th>
      <th>Valor Parcela</th>
    </tr>
    <?php foreach ($data as $quota => $percentage) :
      $calc = ($value + ($value * $percentage) / 100)
    ?>
      <tr>
        <td><?= number_format($calc, 2) ?></td>
        <td><?= $quota ?></td>
        <td><?= number_format(($calc / $quota), 2) ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>

</html>


<?php
?>
