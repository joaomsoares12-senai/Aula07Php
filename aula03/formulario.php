<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 03</title>

        <style>
            body {
                background-color: #dffaff;
            }
            header {
                background-color: #beffc3;
                display: flex;
                height: 80px;
                text-align: center;
                justify-content: center;
            }
            nav {
                height: 50px;
            }
            nav ul{
                display: flex;
                justify-content: center;
                list-style-type: none;
                padding: 0;
                height: 100%;
                margin: 0;
            }
            nav ul li {
                color: #000;
                display: flex;
                height: 100%;
                width: 120px;
                align-items: center;
            }
            nav ul li a {
                color: #000;
                font-weight: bold;
                height: 100%;
                width: 100%;
                align-items: center;
                display: flex;
                transition: background 0.3s ease;
                justify-content: center;
            }
            nav ul li a:hover {
                background-color: #fff8be;
            }

            main {
                height: 600px;
            }

            footer {
                background-color: #beffc3;
            }

            form {
       
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Seja bem vindo!</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">🧥 Inicio</a></li>
                <li><a href="formulario.php">📝 Formulário</a></li>
                <li><a href="mapa.php">🗺 Mapa</a></li>
            </ul>
        </nav>

        <main>
            <h2>Formulário</h2>
            
            <form action="" method="post"> 
                <label>Nome:</label>
                <input type="text" name="nome">
                <br><br>
                <label>Email:</label>
                <input type="text" name="email">
                <button type="submit">Enviar</button>
            </form>
            <br>
            <h3>Lista de cadastro</h3>
            <ol>
                <?php
                    session_start();

                    if(!isset($_SESSION['lista'])) {
                        $_SESSION['lista'] = "";
                    }

                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];

                        $_SESSION['lista'] .= "<li>{$nome} - {$email}</li>";

                        echo $_SESSION['lista'];
                    }
                ?>
            </ol>

        </main>

        <footer>
            <p>Copyright © 2026</p>
            <strong>João Marcos</strong>
        </footer>
    </body>
</html>