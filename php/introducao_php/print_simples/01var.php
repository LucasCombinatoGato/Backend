<?php
    $nome = "Lucas";
    $idade = 17;
    $telefone = 19987654321;
    $casado = true;

    echo "Seu <strong>nome</strong> é: $nome<br>Você tem $idade <strong>anos</strong><br>Seu <strong>telefone</strong> é: $telefone<br>Seu estado civil é: <strong>" .($casado ? 'Casado' : 'Solteiro'). "</strong>.";
?>