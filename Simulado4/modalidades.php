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
    <title>FitControl | Gestão Modalidades</title>
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
            <h1><strong>Modalidades</strong></h1>
            <br>
            <div class="card card-subtle theme-secondary w-75 h-75 mt-5">
                <div class="card-header">
                    <h2 class="mb-5">Cadastrar nova modalidade:</h2>
                </div>
                <form class="card-body" action="./conexao/cadastrarModalidade.php" method="post">
                    <div class="mb-3">
                        <label for="cadastroNome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="cadastroNome" placeholder="Natação" required>
                    </div>
                    <div class="mb-3">
                        <label for="cadastroDesc" class="form-label">Descrição</label>
                        <textarea type="text" name="descricao" class="form-control" id="cadastroDesc" rows="3"></textarea>
                    </div>
                    <div class="mb-3 w-10">
                        <label for="cadastroValor" class="form-label">Valor Mensal</label>
                        <div class="d-flex gap-2">
                            <input type="number" name="valor_mensal" class="form-control" id="cadastroValor" min="0" value="0">
                            <h2>R$</h2>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-solid theme-primary">Cadastrar</button>
                </form>
            </div>
            <br>
            <table class="table table-bordered table-hover table-striped mt-10">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Valor Mensal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "conexao/db.php";

                        $stmt = $db->prepare("SELECT * FROM Modalidades");
                        $stmt->bindParam(':id', $id);
                        if(!$stmt->execute()) {
                            print_r($stmt->errorInfo());
                        } else {
                            $modalidades = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                            foreach($modalidades as $m) {
                                $id = $m["id"];
                                $nome = $m["nome"];
                                $descricao = $m["descricao"];
                                $valor_mensal = $m["valor_mensal"];

                                echo "
                                    <tr>
                                        <th>$id</th>
                                        <th>$nome</th>
                                        <th>$descricao</th>
                                        <th>$valor_mensal R$</th>
                                        <th>
                                            <div class='container-fluid justify-content-start'>
                                            
                                            </div>
                                        </th>
                                     </tr>
                                ";
                            }
                        }
                    ?>
            </table>
        </div>
    </main>
</body>
</html>