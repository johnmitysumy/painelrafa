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

<div class="container py-4">
  <h2>Cadastrar Alerta</h2>
</div>


<div class="container py-4">
<form action="envia_cadastro.php" method="post">
  <label style="font-weight: bold;">Nome</label><br>
  <input class="form form-control" type="text" name="nome" placeholder="Digite o nome do alerta"><br>

  <label style="font-weight: bold;">Status:</label>
  <select name="status" id="status" class="form form-control">
    <option value="ATIVO">ATIVO</option>
    <option value="INATIVO">INATIVO</option>
  </select><BR>
  <button class="btn btn-success" class="form form-control">CADASTRAR</button>
</form>




</section>

    </body>

