<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
      function confirmar(url){
        if(confirm("Deseja realmente excluir?")){
            window.location.href = url;
        }
      }
  </script>

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
          <a class="nav-link" href="index.php">Cadastro de Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">Cadastro de Tarefas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="gerenciar.php">Gerenciar Tarefas</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <!-- Conteudo da pagina -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">A fazer</th>
      <th scope="col">Fazendo</th>
      <th scope="col">Pronto</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <td>


<?php
  //Conectar ao banco de dados
  $db = new PDO("mysql:host=localhost;  dbname=saep","root","");
  $consulta = $db->query("SELECT * FROM tarefa where status='A FAZER'");

  while($tarefa = $consulta->fetch(PDO::FETCH_ASSOC)){
    $id = $tarefa['id_tarefa'];
    $idUsuario = $tarefa['fk_usuario_id'];
    $consultaUsuario = $db->prepare("SELECT * FROM usuario 
    where id=:idUsuario");
    $consultaUsuario->bindValue(':idUsuario', $idUsuario);
    $consultaUsuario->execute();

    $usuario = $consultaUsuario->fetch(PDO::FETCH_ASSOC);
    $nomeUsuario = $usuario['nome'];
?>


<b>Descrição:</b> <?php echo $tarefa['descricao_tarefa'];?> <br>
<b>Usuario vinculado:</b> <?php echo $nomeUsuario;?><br>
<b>setor:</b> <?php echo $tarefa['nome_setor'];?><br>
<b>Prioridade:</b> <?php echo $tarefa['prioridade'];?><br>

<a href="editar.php?id=<?php echo $id;?>">
  <button type="button" class="btn btn-outline-primary">Editar</button>
</a>

<button type="button" onclick="confirmar('conexao/tarefaexcluir.php?id=<?php echo $id;?>')" class="btn btn-outline-danger">Excluir</button>

<br>
<br>

<form action="conexao/tarefaMudarStatus.php?id=<?php echo $id;?>" method="post">
<table>
  <tr>
    <td>
      <select class="form-select" name="status"  aria-label="Default select example">
        <option value="A FAZER">A fazer</option>
        <option value="FAZENDO">Fazendo</option>
        <option value="PRONTO">Pronto</option>
    </select>
    </td>
    <td>
      <button type="submit" class="btn btn-outline-primary">Mudar Status</button>
    </td>
  </tr>
</table>


</form>

<br><br>


<?php
  }
?>
     </td>





      





     


    </tr>
  </tbody>
</table>



  


</div>





</body>
</html>