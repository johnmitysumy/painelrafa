<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php
// Arquivo de conexão com o banco de dados (use o código anterior)
include 'banco.php';

// Obtém o valor do novo status do formulário
$idatualizar = $_POST['id'];
$novoStatus = $_POST['status'];
$observacao = $_POST['observacoes'];


    // Atualiza o status no banco de dados
    $updateSQL = "UPDATE notificacoes SET status = '$novoStatus', observacoes = '$observacao' WHERE id = $idatualizar";

    if ($conn->query($updateSQL) === true) {
        echo "<div class='container text-center h2 py-4'>Status atualizado com sucesso.<Br><Br><a href='edit.php?id=".$_POST['id']."' class='btn btn-primary form form-control'>Voltar</a></div>";
    } else {
        echo "Erro na atualização: " . $conn->error;
    }

?>
<center>
<div class="container text-center" >
  <div class="col-2">
    
  </div>
</div>
  </center>
</section>

<?php


?>

