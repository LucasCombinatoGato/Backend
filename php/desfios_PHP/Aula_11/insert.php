<?php 
    require_once "connect_postgres.php";

    $sql = "INSERT INTO alunos(nome, sobrenome, data_nascimento, turma)
    VALUES(:nome, :sobrenome, :data_nascimento, :turma)";

    $stmt = $conexao -> prepare($sql);
    $stmt->bindValue(":nome", "Thayssa<br>"); 
    $stmt->bindValue(":sobrenome", "Maneo<br>"); 
    $stmt->bindValue(":data_nascimento", "1008-12-27<br>"); 
    $stmt->bindValue(":turma", "I2D35<br>");

    $stmt-> execute();

    echo "Aluno inserido com sucesso!<hr>";

?>