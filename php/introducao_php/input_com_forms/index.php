<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: #112b3c;
        text-align: center;
    }
    body{
        background-color: #205375;
        color: #efefef;
    }
    div{
        background-color: slategray;
        border-radius: 14px;
        padding: 6px 15px;
        margin: 5px;
        box-shadow: 10px solid #112b3c;
        color: #efefef;
    }
    #enviar{
        background-color: #f66b0e;
        border-style: none;
        border-radius: 12px;
        padding: 4px 9px;
        align-items: right;
    }
    hr{
        color: #f66b0e;
    }
    #formulario{
        background-color: #efefef;
        width: 23%;
        margin: auto;
    }
    #formularioDados{
        background-color: #efefef;
        width: 20%;
        margin: auto;
        color: #112b3c;
    }
    input{
        border: 5px black;

    }
</style>
<body>
<!-- Aqui eu crio as div's do formulário de admissão e de dados adicionados -->
<div id="formulario">
    <h1>Formulário de Admissão</h1>
    <form method="POST">
        <!-- aqui, dentro do POST, eu crio a identificação e o input de cada inserção de dados    -->
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
    
        <div>
            <label>Idade: </label>
            <input type="number" name="idade" id="idade">
        </div>
    
        <div>
            <label>Email: </label>
            <input type="email" name="email" id="email">
        </div>
    
        <div>
            <label>Reunião Matinal: </label>
            <input type="time" name="horaReuniao" id="horaReuniao">
        </div>
    
        <div>
            <label>GitHub: </label>
            <input type="url" name="github" id="github">
        </div>
    
        <div>
            <label>Pretensão Salário: </label>
            <input type="number" name="salario" id="salario">
        </div>
        <hr>
        <input type="submit" value="Enviar" id="enviar">
    </form>
</div>
<!-- Aqui eu abro a tag de PHP e faço uma condicional para que ela receba os inputs do forms feito anteriormente -->
<?php 
echo "<br><hr><br>";
if (isset($_POST["nome"])){
    // Aqui uma função para printar o valor de atribuição [como "nome"] e para o valor [como "Jorge"]
    function exibirCampo($label, $valor) {
        echo "<strong>$label:</strong> $valor <br>";
    }
    echo "<div id='formularioDados'> <h2>Dados Adicionados</h2>";

    echo "<hr>";
    // Chamo as funções com os dois parâmetros requeridos para dar input em todos os campos
    exibirCampo("Nome", $_POST["nome"]);
    exibirCampo("Idade", $_POST["idade"]);
    exibirCampo("Email", $_POST["email"]);

    // Aqui eu faço um tratamento dos dados para que eu possa exibir de boa forma para exibi-lo
    $horaFormatada = $_POST["horaReuniao"];
    if (!empty($horaFormatada)) {
        $date = new DateTime($horaFormatada);
        $horaFormatada = $date-> format ('H:i');
    } else {
        $horaFormatada = "Não informada";
    }
    exibirCampo("Reuniões Matinais", $horaFormatada);
    exibirCampo("GitHub", $_POST["github"]);
    exibirCampo("Pretensão Salarial", $_POST["salario"]);
}
echo "</div>";

?>
</body>
</html>