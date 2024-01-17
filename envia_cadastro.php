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


    // Obtém os dados do formulário
    $status = $_POST['status'];
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];

 

    // Insere os dados na tabela notificacoes
    $insertSQL = "INSERT INTO notificacoes (status, nome, imagem) VALUES ('$status', '$nome', '$imagem')";

    if ($conn->query($insertSQL) === true) {
        echo "Notificação cadastrada com sucesso.";
    } else {
        echo "Erro no cadastro: " . $conn->error;
    }

?>

<section class="page-header">
    <img src="imagem/solor2.jpg" />
    <br>
    <div class="container py-6">
    <a href="index.php">Voltar</a>

<br><br>
<form action="/alterar.php" method="post">
<a href="index.php">Voltar</a>
</form>
<a href="index.php" class="btn btn-primary form form-control">Voltar</a>
</div>
    
</section>

<?php


?>