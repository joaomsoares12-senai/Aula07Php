<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="conexao/alunoCadastrar.php" method="post">
        <label for="">Nome </label>
        <input type="text" name="nome">
        <br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>