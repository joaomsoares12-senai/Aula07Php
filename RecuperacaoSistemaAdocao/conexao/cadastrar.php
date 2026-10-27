<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "db.php";

        $nome = $_POST["nome"];
        $especie = $_POST["especie"];
        
        $sql = "INSERT INTO Animais (nome, especie, qtd_interesse, status) VALUE(:nome, :especie, 0, 'Disponível');";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":especie", $especie);
        
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