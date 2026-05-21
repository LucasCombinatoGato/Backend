<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: steelblue;
        color: whitesmoke;
    }
    h1{
        text-align: center;
        color: light;
    }
    h4{
        text-align: right;
        color: lightgoldenrodyellow;
    }
</style>
<body>
    <h1>Calculo de do seu salário Líquido</h1>
    <h4>com horas extras e descontos!</h4>

<?php
    // Aqui é a função para calcular o salário líquido do funcionario, ele usa os parâmetros do Salário bruto e dos Descontos que o Salário tem, ele processa adicionando o valor do salário das horas extras [pela função chamada no processamento] ao salário bruto, antes de fazer o cálculo do salário líquido
    function calculoSalarioLiquido($salarioBruto, $descontos){
        $salarioBruto = $salarioBruto + salarioHorasExtras(12, 40);    
        $salarioLiquido = $salarioBruto - $descontos;
        // E entrega o input dos valores procesados e dados recebidos
        return "Seu salário é: 
       R$$salarioLiquido <hr>Suas horas extras renderam: R$". salarioHorasExtras(12, 40)."<hr> Com descontos de R$$descontos";
    }
    // Função que diz o valor do salário das horas extras perante o valor por hora, e a quantidde de horas trabalhadas
    function salarioHorasExtras($horasExtrasTrabalhadas, $valorHoraExtra){
        $salarioHorasExtras = $horasExtrasTrabalhadas * $valorHoraExtra;
        // Retorna o salário para as horas extras para ser usado na "1ª" função
        return $salarioHorasExtras;
    }

echo calculoSalarioLiquido(1600, 400);
?>
</body>
</html>