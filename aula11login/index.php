<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
</head>
<body>
    <h2>Pagina Início</h2>

    <?php
        require_once "conexao/criptografia.php";

        $cpf = "017.121.475-15";

        $cpfCriptografado = criptografar($cpf);
        
        echo $cpfCriptografado;
        echo "<br>";
        
        
    ?>
</body>
</html>