<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

</style>
<body>
    <div>
        <h1>Verificação do Acesso a Máquina</h1>
        <form method="POST">
            <div>
                <label>Email: </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label>Cargo: </label>
                <input type="text" name="cargo" id="cargo">
            </div>
            <div>
                <label>Seu ID de Cartão: </label>
                <input type="number" name="id" id="id">
            </div>
            <div>
                <label>IP da Máquina Utilizada: </label>
                <input type="number" name="ipMaquina" id="ipMaquina">
            </div>
            <div>
                <button>Claro</button>
                <button>Escuro</button>
            </div>
            <div>
                <input type="submit" value="Enviar" id="enviar">
            </div>
        </form>
    </div>

<?php 
echo "<br><hr><br>";
if (isset($_POST["nome"])){
    
    function exibirCampo($label, $valor) {
        echo "<strong>$label:</strong> $valor <br>";
    }
    echo "<hr>";
    exibirCampo("Email", $_POST["email"]);
    exibirCampo("Cargo", $_POST["Cargo"]);
    exibirCampo("Id cartão", $_POST["id"]);
    exibirCampo("IP Máquina Utilizada", $_POST["ipMaquina"]);
}
echo "</div>";

?>
    
</body>
</html>





<!-- Marcação de acesso ao máquina: -->

<!--
    Email cadastrado
    Cargo na empresa
    Número de ID [cartão]
    IP da Máquina 
-->