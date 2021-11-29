<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Início | Cadastro de Alunos</title>
</head>

<body class="columns">
  <section class="section">
    <h1 class="title">Cadastro de Aluno</h1>
    <form class="form" id="form" action="students.php" method="post">
      <?php
      $fields = [
        'name' => ['label' => 'Nome', 'type' => 'text', 'placeholder' => 'Rogério'],
        'matricula' => ['label' => 'Matrícula', 'type' => 'number', 'placeholder' => '12345'],
        'nota1' => ['label' => 'Nota 1', 'type' => 'number', 'placeholder' => '10.0'],
        'nota2' => ['label' => 'Nota 2', 'type' => 'number', 'placeholder' => '10.0'],
      ];

      foreach ($fields as $name => $data) {
        echo "<div class='field'>";
        echo "<label class='label' for'$name'>" . $data['label'] . ":</label>";
        echo "<div class='control'>";
        echo "<input class='input' type='" . $data['type'] . "' name='$name' id='$name' placeholder='" . $data['placeholder'] . "' required />";
        echo "</div>";
        echo "</div>";
      }
      ?>
      <div class="control">
        <button id="button" class="button is-primary has-text-black-ter" type="submit">Cadastrar</button>
      </div>
    </form>
  </section>
  <script src="validation.js"></script>
</body>

</html>
