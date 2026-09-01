<?php
//Conecto com o BD
$db = new PDO("mysql:host=localhost; 
dbname=saep","root","");

//Recupero o ID
$id = $_GET['id'];

//Prepração do SQL
$stmt=$db->prepare("DELETE FROM tarefa WHERE id=:id");
$stmt->bindParam(':id', $id);
$stmt->execute();

//Voltar a pagina
header("Location: ../gerenciar.php");

?>