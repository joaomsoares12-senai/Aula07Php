<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "db.php";

        $nome = $_POST['nome'] ?? "";
        $email = $_POST['email'] ?? "";

        $sql = "INSERT INTO Aluno (nome, email) VALUE (:nome, :email)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        if($stmt->execute()) {
            echo "
            <script>
                alert('Cadastro Realizado!');
                window.location.href='../index.php';
            </script>
            ";
        }
    }   
?>