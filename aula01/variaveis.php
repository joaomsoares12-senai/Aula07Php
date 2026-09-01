<?php
    //Criação de variaveis
    $nome = "João Marcos Félix";

    /*
    Saída de informação 
    Print de variaveis e string
    */
    echo "Olá mundo! Meu nome é " . $nome; 
    //concatenar usamos o . (ponto)

    $anoNascimento = 2008;
    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;
    echo "<br>Tenho " . $idade . " anos";

?>