<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
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
    <title>FitControl | Login</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>
    
    <div class="vh-100 d-flex gap-5 flex-column justify-content-center align-items-center">
        <div class="d-flex align-items-center">
            <img class="" src="imgs/logo.png" width="96" height="96">
            <h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><strong>FitControl</strong></h1>
        </div>
        <div class="card card-subtle theme-secondary" style="width:70%; max-width: 500px;">
            <div class="card-header">
                <h1>Login</h1>
            </div>
            <form class="card-body" action="conexao/login.php" method="POST">
                <div class="mb-3">
                    <label for="emailInput" class="form-label">Usuário</label>
                    <label class="form-control form-adorn">
                        <div class="form-adorn-icon">
                            <i class="bi bi-envelope-at"></i>
                        </div>
                        <input class="form-ghost" type="email" name="email" placeholder="seu-nome@exemplo.com" id="emailInput" required>
                    </label>
                </div>
                <div class="mb-3">
                    <label for="senhaInput" class="form-label">Senha</label>
                    <input class="form-control" type="password" name="senha" id="senhaInput" required>
                </div>
                <button type="submit" class="btn-solid theme-primary">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>