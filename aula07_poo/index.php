<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php

/*
    $numeroConta = "123456";
    $titular = "Franco Injusto";
    $saldo = 1500;

    $valor = 1600;


    if($valor <= $saldo){
        $saldo = $saldo - $valor;
        echo  "Saque realizado!";

    }else{
        echo "Saldo insuficiente!";
    }
*/

    require_once 'class/conta.class.php';

    $conta1 = new ContaBancaria("123456", "Eltinho", 1000);

    echo "Número da conta: " . $conta1->getNumero();

    echo  "<br><br>";

    echo "Saldo: ".$conta1->getSaldo();
    echo  "<br><br>";

    $conta1->sacar(50);

    echo "Saldo: ".$conta1->getSaldo();
    echo  "<br><br>";

    $conta1->depositar(500);

    echo "Saldo: " . $conta1->getSaldo();
    ?>
</body>
</html>