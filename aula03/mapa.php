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
                display: flex;
                height: 600px;
            }

            footer {
                background-color: #beffc3;
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
            <h2>Mapa</h2>
            <iframe title="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.905187168479!2d-46.65687868452099!3d-23.5642249846864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c5e7b8e9%3A0x7c8b8b8b8b8b8b8b!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1616161616161" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </main>

        <footer>
            <p>Copyright © 2026</p>
            <strong>João Marcos</strong>
        </footer>
    </body>
</html>