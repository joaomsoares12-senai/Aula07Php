<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "db.php";

        $nome = $_POST['nome'] ?? "";
        $email = $_POST['email'] ?? "";

        $sql = "INSERT INTO aluno (nome, email) VALUE (:nome, :email)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }   
?>