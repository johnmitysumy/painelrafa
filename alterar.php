<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
$novoStatus = $_POST['status'];
$observacao = $_POST['observacoes'];


    // Atualiza o status no banco de dados
    $updateSQL = "UPDATE notificacoes SET status = '$novoStatus', observacoes = '$observacao' WHERE id = $idatualizar";

    if ($conn->query($updateSQL) === true) {
        echo "<div class='container text-center h2 py-4'>Status atualizado com sucesso.<Br><Br><a href='edit.php?id=".$_POST['id']."' class='btn btn-primary form form-control'>Voltar</a></div>";
    } else {
        echo "Erro na atualização: " . $conn->error;
    }

?>
<center>
<div class="container text-center" >
  <div class="col-2">
    
  </div>
</div>
  </center>
</section>

<?php


?>

