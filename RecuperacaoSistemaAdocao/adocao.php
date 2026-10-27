<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrapicons.css">
    <title>Adote-me!</title>
</head>
<body>
    <script type="module" src="bootstrap.js"></script>
    <?php include("menu.php")?>

    <main> 
        <div class="container-fluid mt-5">
            <h2>Lista de adoção</h2>
            <br><br>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Espécie</th>
                        <th>Interesse</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "conexao/db.php";

                        $stmt = $db->prepare("SELECT * FROM Animais");
                        $stmt->bindParam(':id', $id);
                        if(!$stmt->execute()) {
                            print_r($stmt->errorInfo());
                        } else {
                            $listaAnimais = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                            foreach($listaAnimais as $a) {
                                $id = $a["id"];
                                $nome = $a["nome"];
                                $especie = $a["especie"];
                                $qtd_interesse = $a["qtd_interesse"];
                                $status = $a["status"];

                                echo "
                                    <tr>
                                        <th>$id</th>
                                        <th>$nome</th>
                                        <th>$especie</th>
                                        <th>$qtd_interesse</th>
                                        <th>$status</th>
                                        <th>
                                            <div class='container-fluid justify-content-start'>
                                                <a href='conexao/adicionarInteresse.php?id=$id' class='btn-outline theme-danger' type='button'>Demonstrar Interesse<i class='bi bi-heart'></i></a>
                                                <a href='conexao/adotar.php?id=$id' class='btn-solid theme-primary' type='button'>Adotar</a>
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