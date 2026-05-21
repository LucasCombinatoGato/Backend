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
        <form method="POST">
            <!-- input dos números para fazer o cáuculo do antecessor e do sucessor -->
            <label>Número Escolhido: </label>
            <input type="number" name="numero_escolhido" id="numero_escolhido">
            <!-- botão para enviar -->
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </div>



    <?php 
        // Verificação de número válido e conversão de "POST" para uma variável PHP
        if (isset($_POST["numero_escolhido"]) && $_POST["numero_escolhido"] !== ""){
            $num_escolhido = $_POST["numero_escolhido"];
            
            // Lógica para calcular o valor antecessor e sucessor
            function find_numero_anterior($num_escolhido){return $num_escolhido - 1; }
            function find_numero_posterior($num_escolhido){return $num_escolhido + 1; }
            
            echo "<div id='block'>
                O número escolhido foi o | ".$num_escolhido." |";
                // Criação do formato de exibição em HTML em uma table
                echo "
                <table>
                <thead>
                    <tr>
                        <th>Antecessor</th>
                        <th>Número</th>
                        <th>Sucessor</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                ";//print do resultado do calculo chamando as funções criadas"
                "
                    <td>".find_numero_anterior($num_escolhido)."</td>
                    <td>".$num_escolhido."</td>
                    <td>".find_numero_posterior($num_escolhido)."</td>
                </tr>
                </tbody>
                </table>
            </div>";
        } 
        else{
            $num_escolhido = null;
        }
    ?>
</body>
</html>