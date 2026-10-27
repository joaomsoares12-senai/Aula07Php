<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        require_once "db.php";

        $id = $_GET["id"];
        
        $sql = "UPDATE Animais SET status='Adotado' WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(":id", $id);
        
        if(!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            echo "
                <script>
                    window.location.href='../adocao.php';
                </script>
            ";
        }
    }     
?>