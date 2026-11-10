<!-- Possui um front própio para mostrar os alertas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.css">
    <link rel="stylesheet" href="../bootstrapicons.css">
    <style>
        body {
            background-color: var(--bs-bg-2);
        }
    </style>
    <?php
        session_start();

        //Definição do tema via cookies e php
        if($_SESSION["tema"] == "claro") {
            echo "<script> document.documentElement.setAttribute('data-bs-theme', 'light'); </script>";
        } else if($_SESSION["tema"] == "escuro") {
            echo "<script> document.documentElement.setAttribute('data-bs-theme', 'dark'); </script>";
        }
    ?>
    <title></title>
</head>
<body>
    <div class="vh-100 d-flex gap-5 flex-column justify-content-center align-items-center"> 
        <dialog class="dialog" id="dialogUsuarioNaoEncontrado">
            <div class="dialog-header">
                <h1 class="dialog-title">Alerta</h1>
                <a href="../login.php" type="button" class="btn-close" data-bs-dismiss="dialog"></a>
            </div>
            <div class="dialog-body">
                <p>Usuário não encontrado.</p>
            </div>
            <div class="dialog-footer">
                <a href="../login.php" type="button" class="btn-solid theme-primary">Voltar</a>
            </div>
        </dialog>

        <dialog class="dialog" id="dialogSenhaInvalida">
            <div class="dialog-header">
                <h1 class="dialog-title">Alerta</h1>
                <a href="../login.php" type="button" class="btn-close" data-bs-dismiss="dialog"></a>
            </div>
            <div class="dialog-body">
                <p>Senha inválida.</p>
            </div>
            <div class="dialog-footer">
                <a href="../login.php" type="button" class="btn-solid theme-primary">Voltar</a>
            </div>
        </dialog>
    </div>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once("funcs/criptografia.php");
        require_once("db.php");

        $stmt = $db->prepare("SELECT * FROM Usuarios");
        
        if(!$stmt->execute()) {
            print_r($stmt->errorInfo());
        } else {
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach($usuarios as $u) {
                $email = $u["email"];
                
                if($email === $_POST["email"]) {
                    if(password_verify($_POST["senha"], $u["senha"])) {
                        //Definine o usuário como válido
                        $_SESSION["usuario"] = $email;

                        echo "
                            <script>
                                window.location.href='../index.php';
                            </script>
                        ";
                    } else {
                        echo "
                            <script>
                                document.getElementById('dialogSenhaInvalida').show();
                            </script>
                        ";
                    }
                }
            }
            
            echo "
                <script>
                    document.getElementById('dialogUsuarioNaoEncontrado').show();
                </script>
            ";
        }
    }
?>