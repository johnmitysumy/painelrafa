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

<br><br>

<a href="index.php">Voltar</a>
