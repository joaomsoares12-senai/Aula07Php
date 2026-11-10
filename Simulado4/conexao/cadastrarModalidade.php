<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "db.php";

        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $valor_mensal = $_POST["valor_mensal"];
        
        $stmt = $db->prepare("INSERT INTO Modalidades (nome, descricao, valor_mensal) VALUE(:nome, :descricao, :valor_mensal);");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":descricao", $descricao);
        $stmt->bindParam(":valor_mensal", $valor_mensal);
        
        if(!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            echo
                "
                    <script>
                        window.location.href='../modalidades.php';
                    </script>
                ";
        }
    }     
?>