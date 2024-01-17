<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">

  </head>
  <body>



<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';


    // Obtém o valor do novo status do formulário
    $idatualizar = $_POST['id'];
    $novoStatus = $_POST['status'];
    $observacao = $_POST['observacoes'];


    // Atualiza o status no banco de dados
    $updateSQL = "UPDATE notificacoes SET status = '$novoStatus', observacoes = '$observacao' WHERE id = $idatualizar";

    if ($conn->query($updateSQL) === true) {
        echo "Status atualizado com sucesso.";
    } else {
        echo "Erro na atualização: " . $conn->error;
    }

?>
<section class="page-header">
    <img src="imagem/solor2.jpg" />
    <br>
    <div class="container py-6">
    

<br><br>
<form action="/alterar.php" method="post">

</form>
<a href="index.php" class="btn btn-primary form form-control">Voltar</a>
</div>
    
</section>

<?php


?>

