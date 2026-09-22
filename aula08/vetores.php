<?php
    $lista_alunos = ["Isabela", "Evelyn", "Wallace", "Caue"];

    array_push($lista_alunos, "Isabella Cirino");

    sort($lista_alunos);
    
    array_pop($lista_alunos);

    foreach($lista_alunos as $aluno) {
        echo(
            "Aluno: $aluno" . "<br>"
        );
    }
?>