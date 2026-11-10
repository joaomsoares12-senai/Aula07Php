<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
    <?php
        session_start();

        //Definição do tema via cookies e php
        if($_SESSION["tema"] == "claro") {
            echo "<script> document.documentElement.setAttribute('data-bs-theme', 'light'); </script>";
        } else if($_SESSION["tema"] == "escuro") {
            echo "<script> document.documentElement.setAttribute('data-bs-theme', 'dark'); </script>";
        }
    ?>
    <title>FitControl | Início</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>

    <?php 
        if(!isset($_SESSION["usuario"])) {
            echo "
                <script>
                    window.location.href='login.php';
                </script>
            ";
        }
    ?>
    <?php include("menu.php"); ?>

    <main> 
        <div class="container-fluid mt-5">
            <h1>Seja bem vindo!</h1>
        </div>
    </main>
</body>
</html>