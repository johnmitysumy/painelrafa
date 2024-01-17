<!doctype html>
<html>
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
   
<?php include 'menu.php'; ?>

<div class="reveal" style="margin-top: -100px;">                 
<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

$sql = "SELECT * FROM notificacoes";
$result = $conn->query($sql);

// Processa os resultados da consulta (exemplo)
while ($row = $result->fetch_assoc()) {
   ?>

   
            <div class="slides" >
                <section <?php 
        if($row["status"] == "ATIVO"){
            echo "style='background-color: #ff00006e; border-radius: 10px 10px 10px 10px;'";
        }else{
            echo "style='background-color: #2bff008c; border-radius: 10px 10px 10px 10px;'";
        }
        ?>>

<h2><?php echo $row["nome"];?></h2> 


<br>
<?php echo $row["observacoes"]?><br>


    





</section>
   <?php
}

// Fecha a conexão ao final do script (opcional, pois o PHP fecha automaticamente as conexões no final da execução)
?>      


        <script src="dist/reveal.js"></script>
        <script src="plugin/notes/notes.js"></script>
        <script src="plugin/markdown/markdown.js"></script>
        <script src="plugin/highlight/highlight.js"></script>
        <script>
            // More info about initialization & config:
            // - https://revealjs.com/initialization/
            // - https://revealjs.com/config/
            Reveal.initialize({
                hash: true,

                // Learn about plugins: https://revealjs.com/plugins/
                plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
            });
            // Slide every five seconds
            Reveal.initialize({
                autoSlide: 3000,
                loop: true
            });
        </script>



    </body>
</html>
