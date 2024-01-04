<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

$sql = "SELECT * FROM notificacoes";
$result = $conn->query($sql);

// Processa os resultados da consulta (exemplo)
while ($row = $result->fetch_assoc()) {
   ?>
<h2><?php echo $row["nome"];?></h2> 

<?php 
    if($row["status"] == "ATIVO"){
        ?>
        <img src="foto/ativo.png" alt="foto/ativo.png" width="200" >
        <?php
    }else{
        ?>
        <img src="foto/inativo.png" alt="foto/inativo.png" width="200" >
        <?php
    }
?>

<a href="edit.php?id=<?php echo $row["id"]?>">Editar</a>

   <?php
}

// Fecha a conexão ao final do script (opcional, pois o PHP fecha automaticamente as conexões no final da execução)


?>

<br>
<a href="cadastrar.php">Cadastrar</a>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>