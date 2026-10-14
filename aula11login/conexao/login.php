<?php
    require_once "db.php";

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    $sql = "SELECT * FROM usuario WHERE email=:email LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $login);

    if(!$stmt->execute()) {
        print_r($stmt->errorInfo());
    } else {
        if($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($senha, $usuario["senha"])) {
                echo "
                    <script>
                        alert('Seja bem vindo! 😃');
                    </script>
                ";    
            } else {
                echo "
                    <script>
                        alert('😏 Senha incorreta!');
                        window.location.href = '../index.php';
                    </script>
                ";
            }
        } else {
            echo "
                <script>
                    alert('😣 Usuário não encontrado!');
                    window.location.href = '../index.php';
                </script>
            ";
        }
    }

?>