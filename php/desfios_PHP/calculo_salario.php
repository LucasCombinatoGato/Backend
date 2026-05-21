<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="forms">
        <h1>Análise do Salário</h1>
        <br><hr><br>
        <!-- recebe as informações necessárioas para programar -->
        <form method="POST">
            <label>Seu salário: </label>
            <input type="number" name="salarioInit" id="salarioInit" required>
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </div>
    <?php 
        if(isset($_POST["salarioInit"]) && $_POST["salarioInit"] !== ""){
            $salarioInit = $_POST["salarioInit"];
            
            // faz o cálculo necessário para printar certo
            $salarioTotal = $salarioInit / 1621.00;
            $salarioTotal = round($salarioTotal);
            $salarioResto = $salarioInit % 1621.00;
            
            // aqui eu printo na estrutura desejada
            echo"<div id='block'><h4>Seu salário é de R$ <strong>".$salarioInit.",00</strong></h4> <br><hr><br>•Seu salário equivale a: <strong>". $salarioTotal. "</strong> salários mínimos<br>•Sobraram: <strong>R$".$salarioResto.",00</strong><br><br><hr><br><strong>O salário mínimo está valendo R$ 1621,00</strong></div>";

        } else{
            return;
        }
    ?>
</body>
</html>