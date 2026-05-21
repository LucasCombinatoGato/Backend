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
        <h1>MEGA-SENA</h1>
        <br>
        <form method="$_POST">
            <input type="submit" value="Sortear" id="enviar">
        </form>
    </div>

    <?php 
    // Criação da função que vai sortear os 6 números
        function sortear(){
            echo "<div id='numeros'>";
            // repetição de 6 vezes
            for ($i = 1; $i <= 6; $i++) {
                // Sorteio do valor aleatório entre 1 e 60
                $num_sorteado = mt_rand(1, 60);
                // Atribúi o valor sorteado em um vetor
                $sorteados[$i] = $num_sorteado;
                // Print do vetor completo
                echo "<div id='unidade_n'><strong>".$sorteados[$i]." </strong></div>";
                }
            echo "</div>";
        }
        // Chama a função para executá-la
        sortear();
    ?>
</body>
</html>