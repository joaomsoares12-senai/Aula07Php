<?php
    require_once "db.php";
    
    $id = $_GET['id'] ?? "";

    $sql = "DELETE FROM Aluno WHERE idAlunos=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":id", $id);
    if($stmt->execute()) {
        echo "
        <script>
            alert('Aluno deletado com sucesso!');
            window.location.href='../index.php';
        </script>
        ";
    }
?>