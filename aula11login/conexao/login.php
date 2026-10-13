<?php
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    echo "Senha normal: " . $senha;
    echo "<br>Senha Cript: " . $senhaHash;
?>