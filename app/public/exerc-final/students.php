<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <title>Tabela | Cadastro de Alunos</title>
</head>

<body>
  <?php
  $nome = $_POST["name"];
  $matricula = $_POST["matricula"];
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];

  $existe = file_exists('alunos.txt');

  if (!$existe) {
    $fluxoCabecalho = fopen('alunos.txt', 'a');
    fwrite($fluxoCabecalho, "Nome, Matrícula, Primeira nota, Segunda nota");
    fclose($fluxoCabecalho);
  }

  $fluxoArquivo = fopen('alunos.txt', 'a+');
  fwrite($fluxoArquivo, "\n$nome, $matricula, $nota1, $nota2");
  fclose($fluxoArquivo);

  $cabecalho = [];
  $corpo = [];
  $row = 0;
  // Percorre o arquivo e salva cada linha em um array
  if (($handle = fopen("alunos.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
      if ($row == 0) {
        $cabecalho = $data;
      } else {
        $corpo[] = $data;
      }
      $row++;
    }
    fclose($handle);
  }
  ?>
  <section class="section">
    <div class="is-flex is-justify-content-space-between">
      <h1 class="title">Tabela de Alunos</h1>
      <button class="button is-primary is-right mb-4"><a class="has-text-black-ter" href="index.php">Cadastrar novo Aluno</a></button>
    </div>
    <table class="table is-bordered is-hoverable is-striped is-fullwidth">
      <thead>
        <tr>
          <?php
          foreach ($cabecalho as $cabecalho) {
            echo "<th>$cabecalho</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($corpo as $linha) {
          echo "<tr>";
          foreach ($linha as $coluna) {
            echo "<td>$coluna</td>";
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </section>
</body>

</html>
