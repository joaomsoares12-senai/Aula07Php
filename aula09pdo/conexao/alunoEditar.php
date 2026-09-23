<?php
    require_once "db.php";

    $id = $_GET["id"];

    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $sql = "UPDATE aluno SET nome=:nome, email=:email WHERE idAlunos=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);

    if($stmt->execute()) {
        echo "
            <script>
                alert('Edição realizada com sucesso!');
                window.location.href='../index.php';
            </script>
        ";
    }
?>