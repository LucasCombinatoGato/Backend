<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size: larger;
        font-size: xx-large;
    }
    div{
        text-align: center;
        justify-self: center;
        display: block;
        background-color: gray;
        border-radius: 12px;
        border-style: dashed;
        max-width: 40%;
        padding: 20px;
    }
</style>    
<body>
    <?php
        $nome = "Cantiga de Ninar";
        $anoFundação = 1968;
        $lucroMensal = 25000.00;
        $funcionarios = 1200;
        $aberta = false;

        echo "<div>
           <p>Nome da Empresa é <strong>".($nome)."</strong><br>Ela existe a <strong>".(2026 - $anoFundação)." anos</strong><br>Lucro da empresa é de <strong>".($lucroMensal)."</strong><br>A empresa contém <strong>".($funcionarios)."</strong> funcionários<br>Atualmente, ela <strong>".($aberta ? "" : "não")." está aberta!</strong></p>
        </div>"
    ?>
</body>
</html>