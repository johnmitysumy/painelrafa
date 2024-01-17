<?php 
//adiciona o menu
include 'menu.php'; 

// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';
?>
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
  // Obtém os dados do formulário
  $status = $_POST['status'];
  $nome = $_POST['nome'];
  $imagem = "ativo.png";

  // Insere os dados na tabela notificacoes
  $insertSQL = "INSERT INTO notificacoes (status, nome, imagem) VALUES ('$status', '$nome', '$imagem')";

  if ($conn->query($insertSQL) === true) {
      echo "<div class='container text-center py-2 h2'>Alerta cadastrado com sucesso.</div>";
  } else {
      echo "<div class='container py-2 h2'>Erro ao tentar cadastrar: " . $conn->error . "</div>";
  }

?>
<center>
<div class="container">
  <div class="col-3">
    <a href="index.php" class="btn btn-primary form form-control">Voltar</a>
  </div>
</div>
</center>
