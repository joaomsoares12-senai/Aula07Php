<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    
<nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #0056b3;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Gerenciamento de Tarefas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link"  href="index.php">Cadastro de Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="cadastrar.php">Cadastro de Tarefas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gerenciar.php">Gerenciar Tarefas</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <!-- Conteudo da pagina -->

  <form action="conexao/tarefacad.php" method="post">
    <br>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Descrição </label>
  <input type="text" class="form-control" name="descricao" id="exampleFormControlInput1" placeholder="Digite a descrição do atendimento" required>
</div>
<br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Setor</label>
  <input type="text" class="form-control" name="setor"  id="exampleFormControlInput1" placeholder="Digite o setor" required>
</div>
<br>
<label for="exampleFormControlInput1" class="form-label">Selecione o usário</label>
<select class="form-select" aria-label="Default select example" name="idUsuario" required>

<?php
  //Conectar ao banco de dados
  $db = new PDO("mysql:host=localhost;
  dbname=saep","root","");
  $consulta = $db->query("SELECT * FROM usuario");

  while($usuario = $consulta->fetch(PDO::FETCH_ASSOC)){
?>
    <option value="<?php echo $usuario['id'];?>">
    <?php echo $usuario['nome'];?></option>
<?php
  }
?>
</select>
<br>
<label for="exampleFormControlInput1" class="form-label">Selecione Prioridade</label>
<select class="form-select" name="prioridade"  aria-label="Default select example">
  <option value="Alta">Alta</option>
  <option value="Media">Media</option>
  <option value="Baixa">Baixa</option>
</select>
<br>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Cadastrar</button>
  </div>

  </form>


</div>





</body>
</html>