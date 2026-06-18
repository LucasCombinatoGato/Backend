<?php 
    require_once 'connect_postgres.php';

    $sql = "UPDATE alunos SET sobrenome = 'Manual' WHERE id = 1";

    $conexao -> exec($sql);

    echo "Aluno atualizado com sucesso!";

?>