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

    <br><br><br>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>E-MAIL</td>
            <td>GESTÃO</td>
        </tr>

        <?php
            require_once "conexao/db.php";

            $sql = "SELECT * FROM Aluno";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            
            $alunos = $stmt->fetchAll();

            foreach($alunos as $aluno) {
        ?>
            <tr>
                <td><?php echo $aluno['idAlunos'];?></td>
                <td><?php echo $aluno['nome'];?></td>
                <td><?php echo $aluno['email'];?></td>
                <td>
                    <a href="editar.php?id=<?php echo $aluno['idAlunos']?>">
                        <button>Editar</button>
                    </a>
                    <a href="conexao/excluir.php?id=<?php echo $aluno['idAlunos']?>" onclick="return confirm('Deseja excluir?');">
                        <button>Excluir</button>
                    </a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</body>
</html>