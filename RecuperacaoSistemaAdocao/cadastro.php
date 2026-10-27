<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
    <title>ONG Raposa</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>
    <?php include("menu.php")?>

    <main>
        <div class="container mt-5">
            <h2 class="mb-5">Cadastrar novo animal:</h2>
            <form action="./conexao/cadastrar.php" method="post">
                <div class="mb-3">
                    <label for="cadastroNome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="cadastroNome" placeholder="Rudolph" required>
                </div>
                <div class="mb-3">
                    <label for="cadastroEspecie" class="form-label">Especie</label>
                    <input type="text" name="especie" class="form-control" id="cadastroEspecie" required>
                </div>
                <button type="submit" class="btn btn-solid theme-primary">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>