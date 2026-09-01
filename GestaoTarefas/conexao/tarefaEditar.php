<?php

$db = new PDO("mysql:host=localhost;  dbname=saep","root","");

$id = $_GET['id'];

$descricao = $_POST['descricao'];
$status = $_POST['status'];
$idUsuario = $_POST['idUsuario'];
$prioridade = $_POST['prioridade'];

//Preparação do SQL
$stml = $db->prepare("UPDATE tarefa SET
fk_usuario_id =:idUsuario , descricao_tarefa=:descricao, nome_setor=:nome
status=:status, prioridade=:prioridade
WHERE id=:id_tarefa");
$stml->bindParam(':idUsuario', $idUsuario);
$stml->bindParam(':descricao', $descricao);
$stml->bindParam(':status', $status);
$stml->bindParam(':prioridade', $prioridade);
$stml->bindParam(':id', $id);

if($stml->execute()){
    echo "<script>alert('Edição realizada com Sucesso!');
    window.location.href = '../gerenciar.php';
    </script>";
}else{
    echo "<script>alert('Erro ao editar!');
    window.location.href = '../gerenciar.php';
    </script>";
}





?>