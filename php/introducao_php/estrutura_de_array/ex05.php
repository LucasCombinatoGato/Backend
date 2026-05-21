<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: darkgray;
    }
    table{
        font-size: 38px;
        color: aliceblue;
        border-collapse: collapse;
        border: lightslategrey solid 3px;
    }
    thead{
        background-color: dark;
    }
    
</style>
<body>
    <table cellpadding=10px border='1'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $funcionarios = [
        ["nome" => "Ana", "cargo" => "Analista", "salario" => 2000],
        ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 3000],
        ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 4000],
        ["nome" => "Jorge", "cargo" => "Pai", "salario" => 5000],
        ["nome" => "Thayssa", "cargo" => "Desenvolvedora", "salario" => 6000]
    ];
        foreach ($funcionarios as $f){
            echo "<tr><td>".$f["nome"]."</td>";
            echo "<td>".$f["cargo"]."</td>";
            echo "<td>".$f["salario"]."</td>";
            echo "</tr>";
        }
    ?>
            </tbody>
        </table>
</body>
</html>