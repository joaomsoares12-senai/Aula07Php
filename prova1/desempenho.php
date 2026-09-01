<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desempenho Enem2026</title>

    <style>
        body {
            /*width: 700px;*/

            background-color: #f7f9ff;
        }

        header {
            display: flex;

            width: 100%;
            height: 158px;

            padding: 24px;

            background-color: #7898f0;

            border-radius: 8px;
        }

        header h1 {
            font-family: Stencil;
            font-weight: bold;
            font-size: 52px;
            color: #ffffff;
        }

        nav {
            width: 100%;
            height: 88px;

            background-color: #1c50df;

            border-radius: 8px;
        }

        nav ul {
            display: flex;

            height: 100%;

            list-style-type: none;

            padding: 8px;
            margin: 10px;
        }
        nav ul li {
            height: 100%;
            width: 200px;

            padding: 12px;
        }
        nav ul li a {
            display: flex;

            align-items: center;
            justify-content: center;

            color: #030303;

            font-size: 22px;
            font-weight: bold;

            border-radius: 8px;

            width: 200px;
            height: 100%;
        
            transition: background 0.3s ease;
            background-color: #f7f9ff;
        }
        nav ul li a:hover {
            background-color: #e0dddd;
        }
        
        main {
            border-radius: 8px;

            height: 600px;

            padding: 32px;
            margin: 10px;

            background-color: #e0dddd;
        }

        main h1{
            background-color: #fff;
        }

        main h2{
            background-color: #fff;
        }

        footer {
            display: flex;
            justify-content: right;
        }
    </style>
</head>
<body>
    <header>
        <img src="./img/books.png">
        <h1>Desempenho<br> Enem 2026</h1>
    </header>

    <nav>
        <ul> 
            <li><a href="index.php">Início</a></li> 
            <li><a href="cadastro.php">Cadastro</a></li> 
            <li><a href="desempenho.php">Desempenho 🧾</a></li> 
        </ul>
    </nav>

    <main>
        <?php
            session_start();

            if(!isset($_SESSION['nome'])) {
                echo "<h1> Realize seu cadastro primeiro. 🤶</h1>";
            } else {
                echo"
                    <div>
                        <h1> Seja bem vindo " . $_SESSION['nome'] . "! </h1>
                        <h2> Email: " . $_SESSION['email'] . ".</h2>
                        <br>
                        <h1> Coloque as suas notas:</h1>
                        <form action='' method='post'> 
                            <label>Linguagens:</label>
                            <input type='number' name='nota1'>
                            <br><br>
                            <label>Humanas:</label>
                            <input type='number' name='nota2'>
                            <br><br>
                            <label>Matemática:</label>
                            <input type='number' name='nota3'>
                            <br><br>
                            <label>Redação:</label>
                            <input type='number' name='nota4'>
                            <br><br>
                            <button type='submit'>Enviar</button>
                        </form>
                    </div>
                    ";
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $media = ($_POST['nota1'] + $_POST['nota2'] + $_POST['nota3'] + $_POST['nota4']) / 4;

                if($media >= 600) {
                    echo "<h1>Excelente  desempenho! Sua média foi {$media}.</h1>";
                } else {
                    echo "<h1>Sua média foi {$media}. Continue estudando!</h1>";
                }
            }
        ?>

        


    </main>

    <footer>
        <h3>João Marcos © 2026</h3>
    </footer>
</body>

</html>