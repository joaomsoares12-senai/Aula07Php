<?php
    //Buscar informações do formulario
    $descricao = $_POST['descricao'];
    $setor = $_POST['setor'];
    $usuario = $_POST['idUsuario'];
    $prioridade = $_POST['prioridade'];
    $status = "a fazer"; 
    $data = date('Y-m-d');

    //Conectar ao banco de dados
    $db = new PDO("mysql:host=localhost; dbname=saep","root","");

    //Preparação do SQL
    $stml = $db->prepare("INSERT INTO tarefa (fk_usuario_id, descricao_tarefa, data_cadastro, nome_setor, prioridade, status) VALUE (:usuario, :descricao, :data, :setor, :prioridade, :status)");
$stml->bindParam(':usuario',$usuario);
$stml->bindParam(':descricao',$descricao);
$stml->bindParam(':setor',$setor);
$stml->bindParam(':prioridade',$prioridade);
$stml->bindParam(':data',$data);
$stml->bindParam(':status',$status);

//Condicional para verificar se foi cadastrado
if($stml->execute()){
    echo "
    <script>
        alert('Cadastro Realizado com Sucesso!');
        window.location.href = '../gerenciar.php';
    </script>
    ";
}else{
    echo "
    <script>
        alert('Erro ao cadastrar!');
        window.location.href = '../gerenciar.php';
    </script>
    ";
}



?>