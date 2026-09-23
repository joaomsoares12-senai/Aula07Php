<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Alunos</title>
</head>
<body>
    <h2>Formulário de Edição</h2>
    <?php
        require_once "conexao/db.php";

        $id = $_GET['id'];

        $sql = "SELECT * FROM aluno WHERE idAlunos=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $alunoEdit = $stmt->fetch(PDO::FETCH_ASSOC);

        $nomeAluno = $alunoEdit['nome'];
        $emailAluno = $alunoEdit['email'];
    ?>
    <form action="conexao/alunoEditar.php?id=<?php echo $id?>" method="post">
        <label for="">Nome </label>
        <input type="text" name="nome" value="<?php echo $nomeAluno;?>">
        <br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email" value="<?php echo $emailAluno;?>">
        <br><br>
        <button type="submit">Editar</button>
    </form>

    <br><br><br>
</body>
</html>