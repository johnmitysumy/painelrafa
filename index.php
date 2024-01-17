<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <title>Alarmes Yduqs</title>

        <link rel="stylesheet" href="dist/reset.css">
        <link rel="stylesheet" href="dist/reveal.css">
        <link rel="stylesheet" href="dist/theme/white.css" id="theme">

        <!-- Theme used for syntax highlighted code -->
        <link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
    </head>
    <body>
    <div class="reveal">
        <div class="slides">
            <section>
                <img data-src="logo_RDSL.png">
            </section>
                    
<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

$sql = "SELECT * FROM notificacoes";
$result = $conn->query($sql);

// Processa os resultados da consulta (exemplo)
while ($row = $result->fetch_assoc()) {
   ?>
   <div class="reveal">
            <div class="slides">
                <section>
<h2><?php echo $row["nome"];?></h2> 


<br>
<?php echo $row["observacoes"]?><br>
<button onclick="return confirm">
<a href="edit.php?id=<?php echo $row["id"]?>">Editar</a>
<br>
<button onclick="return confirm">
<a href="cadastrar.php" button type="button" class="btn btn-primary">Cadastrar</a>
<Br>
<form action="remover.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <button onclick="return confirm('Deseja realmente remover?');">Remover</button>
</form>

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
