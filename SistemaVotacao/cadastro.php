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
        <form action="./conexao/cadastrar.php" method="post">
                <h2>Cadastrar Candidato:</h2>
                <br>
                <label>Nome: </label>
                <input type="text" name="nome" placeholder="Digite aqui o seu nome" required/>
                <br><br>
                <label>Partido: </label>
                <input type="text" name="partido" placeholder="Digite aqui o nome do partido" required/>
                <br><br>
                
                <button type="submit">Cadastrar!</button> 
        </form>
    </main>

</body>
</html>