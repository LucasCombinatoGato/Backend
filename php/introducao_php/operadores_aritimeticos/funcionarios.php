<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
// Style básico, só para não ficar apenas em preto e branco
<style>
    body {
        background-color: aliceblue;
        color: black;
        text-align: center;
    }
    table {
        margin: auto;
        background-color: lightskyblue;
    }
</style>
<body>
    // Abre a tag de PHP para iniciar o código
    <?php
        echo "<h1>Esse é um sistema de cálculo de quanto você gasta com seus funcionários mensalmente!</h1>";

        // Declaração de variaveis de número de funcionários
        $funcionario_baixo_cargo = 5500;
        $funcionario_medio_cargo = 2200;
        $funcionario_alto_cargo = 300;

        // Declaração do salário de cada cargo de funcionários
        $salario_baixo_cargo = 1800;
        $salario_medio_cargo = 6200;
        $salario_alto_cargo = 12000;

        // Calculo do gasto para todos os funcionarios dividido por cargo
        $salario_funcs_baixo_cargo = $funcionario_baixo_cargo * $salario_baixo_cargo;
        $salario_funcs_medio_cargo = $funcionario_medio_cargo * $salario_medio_cargo;
        $salario_funcs_alto_cargo = $funcionario_alto_cargo * $salario_alto_cargo;

        // Exibição de cada gasto mensal por patente de funcionário em uma tabela
        echo "<table border='1' bordercolor='black' cellspacing='0' cellpadding='7'>
            <th>Gastos com funcionários</th>
            <tr>
                <td>O gasto mensal com <strong>".$funcionario_baixo_cargo."</strong> funcionarios de baixo cargo é de: <b><u>R$ ".$salario_funcs_baixo_cargo."</u></b></td>
            </tr>
            <tr>
                <td>O gasto mensal com <strong>".$funcionario_medio_cargo."</strong> funcionarios de médio cargo é de: <b><u>R$ ".$salario_funcs_medio_cargo."</u></b></td>
            </tr>
            <tr>
                <td>O gasto mensal com <strong>".$funcionario_alto_cargo."</strong> funcionarios de alto cargo é de: <b><u>R$ ".$salario_funcs_alto_cargo."</u></b></td>
            </tr>
        </table>";

        // Processamento de qual é o cargo com maior gasto mensal para salário
        $maior_gasto_salario = $salario_funcs_alto_cargo > $salario_funcs_medio_cargo && $salario_funcs_alto_cargo > $salario_funcs_baixo_cargo ? "alto cargo" : ($salario_funcs_medio_cargo > $salario_funcs_baixo_cargo ? "médio cargo" : "baixo cargo");

        // Exibição do cargo com maior gasto mensal para salário
        echo "<br><br><h3>O gasto que a empresa é maior com os funcionarios de baixo, médio ou alto cargo?<h3><br><p>O cargo com <strong>maiores gastos</strong> da empresa são os de <strong>".$maior_gasto_salario."</strong>.</p>";
    ?>
</body>
</html>