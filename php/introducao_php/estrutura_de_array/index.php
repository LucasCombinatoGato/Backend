<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online</title>
</head>
<!-- Style básico -->
<style>
    body{
        background-color: rgb(71, 71, 71);
        justify-items: center;
    }
    table{
        font-size: 38px;
        color: aliceblue;
        border-collapse: collapse;
        border: lightslategrey solid 3px;
        gap: 10px;
    }
    thead{
        background-color: dark;
    }
    h1{
        color: white;
        font-size: 50px;
    }
    
</style>
<body>
    <h1>Tabela de Produtos</h1>
    <!-- Abre uma tabela para fazer a inserção de dados -->
    <table cellpadding=10px border='1'>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Preço</th>
                <th>Quantidade Estoque</th>
            </tr>
        </thead>
        <tbody>

            <!-- Abre a tag de PHP -->
        <?php
            $dados_produtos = [
                // Insere os dados para cada produto
                ["nome"=> "Boia de flamingo", "marca" => "Praiana", "preco" => 53.99, "quantEstoq" => 55],
                ["nome"=> "Guarda-sol", "marca" => "Praiana", "preco" => 55.99, "quantEstoq" => 30],
                ["nome"=> "Boia de donuts", "marca" => "Centaurus", "preco" => 37.99, "quantEstoq" => 60],
                ["nome"=> "Tanga estampada", "marca" => "Renner", "preco" => 40.99, "quantEstoq" => 160],
                ["nome"=> "Óculos de natação", "marca" => "Splash", "preco" => 32.99, "quantEstoq" => 0],
                ["nome"=> "Protetor solar", "marca" => "Aloe-Vera", "preco" => 22.99, "quantEstoq" => 180],
            ];

            // Faz uma repetição que passa por todos os dados inseridos
            foreach ($dados_produtos as $dp){
                echo "<tr><td>".$dp["nome"]."</td>";
                echo "<td>".$dp["marca"]."</td>";
                echo "<td>".$dp["preco"]."</td>";
                echo "<td>".$dp["quantEstoq"]."</td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>