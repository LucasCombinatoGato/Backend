<?php 
    require_once 'connect_postgres.php';

    $id = 1;

    $sql = "SELECT * FROM alunos WHERE id = :id";

    $stmt = $conexao-> prepare($sql);
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $a = $stmt -> fetch(PDO::FETCH_ASSOC);
    echo "Nome: {$a['$nome']}";
    echo "Sobrenome {$a['$sobrenome']}";
    echo "Turma {$a['$turma']}";
    echo "Data de Nascimento {$a['$data_nascimento']}";
?>