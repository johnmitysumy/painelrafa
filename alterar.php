<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';


    // Obtém o valor do novo status do formulário
    $idatualizar = $_POST['id'];
    $novoStatus = $_POST['status'];

    // Atualiza o status no banco de dados
    $updateSQL = "UPDATE notificacoes SET status = '$novoStatus' WHERE id = $idatualizar";

    if ($conn->query($updateSQL) === true) {
        echo "Status atualizado com sucesso.";
    } else {
        echo "Erro na atualização: " . $conn->error;
    }

?>
<a href="index.php">Voltar</a>