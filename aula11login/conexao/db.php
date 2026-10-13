<?php 
    $host = "localhost";
    $dbname = "escolat";
    $usuario = "root";
    $senha = "";

    try {
        $db = new PDO("mysql:host=$host; dbname=$dbname", $usuario, $senha);
    } catch(PDOException $e) {
        echo "Erro: ".$e->getMessage();
    }
?>