<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "db.php";

        $id = $_POST["id"] ?? "";
        $nome = $_POST["nome"] ?? "";
        $categoria = $_POST["categoria"] ?? "";
        $quantidade = $_POST["quantidade"] ?? "";

        $sql = "INSERT INTO Produto (id, nome, categoria, quatidade) VALUE(:id, :nome, :categoria, :quantidade);";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":quantidade", $quantidade);
        
        if!($stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            echo
                "
                    <script>
                        alert('Cadastro realizado com sucesso!');
                    </script>
                "
        };
    }

    echo 
        "
            <script>
                window.location.href='../index.php';
            </script>
        ";
?>