<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DBAtacadão</title>
</head>
<body>
        <header>
            <img class="Logo" src="./img/atacadao-logo-png_seeklogo-593562-removebg-preview.png"/> 
        </header>

        <nav>
            <div class="BotaoInicio">
                <a href="index.php">Início </a>
            </div>
            <div class="BotaoCadastrar">
                <a href="cadastro.php">Cadastrar </a>
            </div>
            <div class="BotaoGerenciar">
                <a href="gerenciar.php">Gerenciar </a>
            </div>
        </nav>

        <!--Especifíco para a página -->
        <main>
            <form action="./conexao/cadastrarProduto.php" method="post">
                <h2>Cadastrar produto:</h2>
                <br>
                <label>Nome: </label>
                <input type="text" name="nome" placeholder="Digite aqui o nome do produto"/>
                <br><br>
                <label>Categoria: </label>
                <select name="categoria">
                    <option value="alimentos">Alimentos</option>
                    <option value="bebidas">Bebidas</option>
                    <option value="limpeza">Limpeza</option>
                    <option value="saúde">Saúde</option>
                </select>
                <br><br>
                <label>Quantidade em estoque: </label>
                <input type="number" name="quantidade" min="0"/>
                <br><br>
                <button type="submit">Cadastrar!</button> 
            </form>
        </main>
</body>
</html>