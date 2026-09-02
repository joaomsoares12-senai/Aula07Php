<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Saúde Financeira</title>

    <style>
        body {
            display: inline;
            justify-content: center;
            background-color: #dfecff;
        }

        header {
            display: grid;
            justify-content: center;
            place-items: center;
            background-color: #193b64;
            color: #fff;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
            gap: 10px;
            background-color: #062954;
        }
        nav div {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 60px;
            border-radius: 25px;
        }
        nav div:hover {
            transition: background 0.3s ease;
            background-color: #92c3ff;
        }
        nav div a {
            color: #fff;
            text-decoration: none;
        }

        main {
            display: grid;
            width: 90%;
            height: 500px;
            margin: 2.5% auto;
            padding: 10px;
            border-radius: 15px;
            background-color: #fff;
        }
        main form {
            display: inline;
        }
    </style>
</head>
<body>
    <header>
        <h1>💰 Analisador de Saúde Financeira</h1>
        <h4>Entenda seus hábitos e planeje seu futuro com segurança</h4>  
    </header>

    <nav>
        <div class="selecionado"><a href="index.php"><h3>Início</h3><a></div>
        <div class="opcao"><a href="cadastro.php"><h3>Cadastro</h3><a></div>
        <div class="opcao"><a href="index.php"><h3>Lista de Cadastro</h3><a></div>
        <div class="opcao"><a href="index.php"><h3>Minha Análise</h3><a></div>
    </nav>

    <main>
        <form>
            <h1>🧾 Cadastro do Estudante</h1>
            <h3>Preencha seus dados para começar</h3>
            <br>
            <label>Nome completo:</label>
            <input type="text" name="nome">
            <br>
            <label>E-mail:</label>
            <input type="text" name="email">
            <br>
            <label>Cidade:</label>
            <select name="sexo"> 
            <option value="Bayeux">Bayeux</option>
            <option value="João Pessoa">João Pessoa</option>
            <option value="Campina Grande">Campina Grande</option>
            <option value="Santa Rita">Santa Rita</option>
            <option value="Cabedelo">Cabedelo</option>
            </select>
            <br>
            <button type="submit">📩 Cadastrar</button>
        </form>
    </main>
</body>
</html>