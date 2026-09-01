<?php

//buscar id enviado via GET
$id = $_GET['id'];

//buscar informações do formulário
$status = $_POST['status'];

$db = new PDO("mysql:host=localhost;  dbname=saep","root","");

//Preparação do Scrip SQL
$stml = $db->prepare("UPDATE tarefa SET status=:status WHERE id=:id");
$stml->bindParam(':id', $id);
$stml->bindParam(':status', $status);

if ($stml->execute()){
    echo "<script>
         alert('Status atualizado!');
         window.location.href = '../gerenciar.php';
    </script>";
}else{
    echo "<script>
        alert('Erro ao atualizar!');
        window.location.href = '../gerenciar.php';
    </script> ";
}


?>