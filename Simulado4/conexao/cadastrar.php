<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "db.php";

        $nome = $_POST["nome"];
        $partido = $_POST["partido"];
        $votos = 0;
        
        $stmt = $db->prepare("INSERT INTO Candidatos (nome, partido, votos) VALUE(:nome, :partido, :votos);");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":partido", $partido);
        $stmt->bindParam(":votos", $votos);
        
        if(!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            echo
                "
                    <script>
                        alert('Cadastro realizado com sucesso!');
                        window.location.href='../index.php';
                    </script>
                ";
        }
    }     
?>