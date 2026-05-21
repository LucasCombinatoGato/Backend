<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
// Stilização simples para o código

<style>
    h1 {
        text-align: center;
    }
    body {
        text-align: left;
        padding-left: 50px;
        font-size:x-large;
        background-color: lightgray;
    }
</style>
<body>
    <h1>Classificação da sua Empresa</h1>
    // Inicializa a tag de php
    <?php
        $função_empresa = "produzir";
            // Tipos de empresa que eu (Lucas) encontrei na pesquisa
            // Produzir
            // Vender
            // Prestar serviço
        $quantidade_funcionarios_empresa = 1000000;
        $receita_anual_empresa = 5000000;
        
        // Um processamento de que tipo de tamanho de empresa é dependendo de sua receita anual
        echo "<u>Com um empresa com receita anual de <b>R$ ".$receita_anual_empresa."</b></u>: ";
        if ($receita_anual_empresa > 81000):
            echo "A empresa se enquadra em um ME (Microempresa) ou uma empresa de médio a grande porte.";
        else:
            echo "A empresa se enquadra em um MEI (Microempreendedor Individual)";
        endif;
        
            
        // Produzir --> Indústria
        // Vender --> Comércio
        // Prestar Serviço --> Serviços
        
        // Define o setor da empresa com base na fucionalidade dela
        echo "<br><br><u>Sua empresa se enquadra no setor de: </u>";
            switch ($função_empresa){
                case "produzir":
                    echo "<strong>Indústria.</strong>";
                    $tipo_empresa = "Indústria";
                    break;
                case "vender":
                    echo "<strong>Comércio.</strong>";
                    $tipo_empresa = "Comércio";
                    break;
                case "prestar serviço":
                    $tipo_empresa = "Serviços";
                    echo "<strong>Serviços.</strong>";
                    break;
                default:
                    echo "<strong>Setor não identificado</strong>";
            };
        
        // Faz um calculo básico para definir o tamanho da empresa em funcionários
        echo "<br><br><u>Sua empresa contém <strong>".$quantidade_funcionarios_empresa." funcionários</strong>, ela o enquadra em</u>: ";
        
        if ($tipo_empresa == "Indústria"):
            switch ($quantidade_funcionarios_empresa):
            case ($quantidade_funcionarios_empresa < 20):
                echo "<b>Capacidade de uma ME</b>";
                break;
            case ($quantidade_funcionarios_empresa >= 20 && $quantidade_funcionarios_empresa <= 99):
                echo "<b>Capacidade de uma EPP</b>";
                break;
            case ($quantidade_funcionarios_empresa >= 100 && $quantidade_funcionarios_empresa <= 499):
                echo "<b>Capacidade de uma Média Empresa</b>";
                break;
            case ($quantidade_funcionarios_empresa >= 500):
                echo "<b>Capacidade de uma Grande Empresa</b>";
                break;
            default:
                echo "<b>Número de funcionários inválido</b>";
                break;
            endswitch;
        else:
            switch ($quantidade_funcionarios_empresa):
                case ($quantidade_funcionarios_empresa < 10):
                    echo "Capacidade de uma ME";
                    break;
                case ($quantidade_funcionarios_empresa >= 10 && $quantidade_funcionarios_empresa < 50):
                    echo "Capacidade de uma EPP";
                break;
                case ($quantidade_funcionarios_empresa >= 50 && $quantidade_funcionarios_empresa < 100):
                    echo "Capacidade de uma Média Empresa";
                    break;
                case ($quantidade_funcionarios_empresa >= 100):
                    echo "Capacidade de uma Grande Empresa";
                    break;
            default:
                echo "Número de funcionários inválido";
                break;
            endswitch;
        endif;
        // Finaliza o processamento e fecha a "tag" <php>
    ?>
</body>
</html>