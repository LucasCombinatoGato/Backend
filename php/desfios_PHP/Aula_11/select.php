<?php 
    require_once "connect_postgres.php";

    $sql = "SELECT * FROM alunos";


    // stmt = statement refere-se a um objato PDOStatement no contexto do PDO
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($alunos as $a){
        echo "ID: {$a['id']}";
        echo "Nome: {$a['nome']}";
        echo "Sobrenome {$a['sobrenome']}";
        echo "Turma {$a['turma']}";
        echo "Data de Nascimento {$a['data_nascimento']}";
        echo "Ativo: " .($a['ativo'] ? "Ativo":"Inativo"). "<hr><br>";
    }
?>