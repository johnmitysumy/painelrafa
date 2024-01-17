<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

      <title>Cadastrado no banco</title>

      <link rel="stylesheet" href="dist/reset.css">
      <link rel="stylesheet" href="dist/reveal.css">
      <link rel="stylesheet" href="dist/theme/white.css" id="theme">
      <link rel="stylesheet" href="css/cssmenu.css" id="theme">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Theme used for syntax highlighted code -->
      <link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
  </head>
<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

//adiciona o menu
include 'menu.php';

// Obtém o valor do novo status do formulário
$idatualizar = $_POST['id'];

$updateSQL = "DELETE FROM notificacoes WHERE id =  $idatualizar";

  if ($conn->query($updateSQL) === true) {
      echo "<div class='h2 container text-center py-2'>Removido com sucesso</div>";
  } else {
      echo "Erro ao tentar remover: " . $conn->error;
  }

?>
<center>
  <div class="container">
    <div class="col-3">
    <a href="edit_list.php" class="btn btn-primary form form-control">Voltar</a>
    </div>
  </div>
</center>