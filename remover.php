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

    $updateSQL = "DELETE FROM notificacoes WHERE id =  $idatualizar";

    if ($conn->query($updateSQL) === true) {
        echo "Removido com sucesso";
    } else {
        echo "Erro ao tentar remover: " . $conn->error;
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

