<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>Alarmes Yduqs</title>

        <link rel="stylesheet" href="dist/reset.css">
        <link rel="stylesheet" href="dist/reveal.css">
        <link rel="stylesheet" href="dist/theme/white.css" id="theme">
        <link rel="stylesheet" href="css/cssmenu.css" id="theme">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Theme used for syntax highlighted code -->
        <link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
    </head>
  <body>

  <?php include 'menu.php'; ?>

<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

echo $id = $_GET['id'];


// Exemplo de consulta simples
$sql = "SELECT * FROM notificacoes where id = $id";
$result = $conn->query($sql);

// Processa os resultados da consulta (exemplo)
while ($row = $result->fetch_assoc()) {
    echo  $row["nome"] . " - Status - ". $row["status"]."<br>";
 
    
?>

<div class="container py-6">
    
<form action="/alterar.php" method="post">
    

    <label for="">Observacoes</label><br>
    <input type="text" name="observacoes" value="<?php echo $row["observacoes"] ?> " class="form-control"><br><br>

    <input type="submit" value="Atualizar" class="btn btn-danger form form-control">

</form>
<a href="index.php" class="btn btn-primary form form-control">Voltar</a>
</div>


<?php

}
?>



