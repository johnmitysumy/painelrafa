<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Alarmes Yduqs</title>
    <link rel="stylesheet" href="dist/reset.css">
    <link rel="stylesheet" href="dist/reveal.css">
    <link rel="stylesheet" href="dist/theme/white.css" id="theme">
    <link rel="stylesheet" href="plugin/highlight/monokai.css" id="highlight-theme">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Barra de navegação fixa */
        #barraNavegacao {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            padding: 10px;
            color: #fff;
            z-index: 999;
        }

        /* Estilo dos botões na barra de navegação */
        #barraNavegacao a {
            margin-right: 10px;
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 5px;
            background-color: #4285f4; /* Cor de fundo dos botões */
        }
    </style>
</head>
<body>   

    <!-- Barra de navegação fixa -->
    <div id="barraNavegacao">
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
        <a href="edit.php" class="btn btn-secondary">Editar</a>
        <a href="remover.php" class="btn btn-danger" onclick="return confirm('Deseja realmente remover?');">Remover</a>
    </div>

    <?php
    include 'banco.php';

    $sql = "SELECT * FROM notificacoes";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
    ?>
        <div class="reveal">
            <div class="slides">
                <section>
                    <h2><?php echo $row["nome"];?></h2> 
                    <br>
                    <?php echo $row["observacoes"]?><br>

                    <!-- Botão Editar dentro do loop -->
                    <a href="edit.php?id=<?php echo $row["id"]?>" class="btn btn-secondary">Editar</a>

                    <!-- Formulário de remoção -->
                    <form action="remover.php" method="post" style="display: inline-block;">
                        <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                        <button class="btn btn-danger" onclick="return confirm('Deseja realmente remover?');">Remover</button>    
                    </form>
                </section>
            </div>
        </div>
    <?php
    }
    ?>

    <script src="dist/reveal.js"></script>
    <script src="plugin/notes/notes.js"></script>
    <script src="plugin/markdown/markdown.js"></script>
    <script src="plugin/highlight/highlight.js"></script>
    <script>
        Reveal.initialize({
            hash: true,
            plugins: [ RevealMarkdown, RevealHighlight, RevealNotes ]
        });

        Reveal.initialize({
            autoSlide: 3000,
            loop: true
        });
    </script>

</body>
</html>
