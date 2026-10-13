<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Votação</title>
</head>
<body>
    <?php include_once "menu.php" ?>
    <main>
        <?php
            require_once "conexao/db.php";

            $sql = "SELECT * FROM Candidatos;";
            $stmt = $db->prepare($sql);

            if(!$stmt->execute()) {
                print_r($stmt->errorInfo());
            } else {
                $listaCandidatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($listaCandidatos as $c) {
                    $id = $c["id"];
                    $nome = $c["nome"];
                    $partido = $c["partido"];
                    $votos = $c["votos"];

                    echo "
                        <div class='boxCandidato'>
                            <h1>$nome</h1>
                            <br>
                            <p>Partido: $partido</p>
                            <p>Votos: $votos</p>
                        </div>
                        <a href='conexao/adicionarVoto.php?id=$id'><button class='bVotar'>Votar!</button></a>
                    ";
                }
            }
        ?>
    </main>
</body>
</html>