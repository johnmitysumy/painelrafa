<?php 
include 'banco.php';

$sql = "SELECT * FROM notificacoes";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/cssmenu.css" id="theme">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <title>Lista de alertas</title>
</head>
<body>

<!-- inclue o menu da página -->
<?php include 'menu.php'; ?>

<div class="container py-4">
    <h2>Lista de Alertas</h2>
</div>

<div class="container py-4">
    <table id="example" class="display" style="width:100%; margin-top:50px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Status</th>
                <th>Observações</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
<?php
    while ($row = $result->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["nome"]?></td>
                <td><?php echo $row["status"]?></td>
                <td><?php echo $row["observacoes"]?></td>
                <td>
                <div class="row">
                    <div class="col-3">
                        <a href="edit.php?id=<?php echo $row["id"]?>"><button class="btn btn-warning">Editar</button></a>
                    </div>
                    <div class="col-2">
                        <form action="remover.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                            <button class="btn btn-danger" onclick="return confirm('Deseja realmente remover?');">Remover</button>
                        </form>
                    </div>
                </div>
                    
                    
        

        

                </td>
            </tr>
<?php
    }
?>
        </tbody>
    </table>
</div>


</body>
</html>

<script>
    $('#example').DataTable();
</script>

