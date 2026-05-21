<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microsoft FanBase</title>
</head>
<style> 
/* Define o estilo dos elementos e da página  */
    body {
        background-color: black;
    }
    h1, h2,  p {
        color: white;
        text-align: center;
    }
    #titulo {
        display: flex;
        justify-content: center;
        height: 12%;
        width: 100%;
        background-color: darkblue;
    }
    #lemas {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 50%;
        width: 70%;
        background-color: darkred;
    }
</style>
<body>
    <!-- Até aqi, o arquivo html continua o mesmo, a partir daqui, será utilizado o PHP... -->
    <?php
    // utiliza as tags de HTML para editar o PHP
        echo '<div id="titulo">
            <h1>Microsoft!</h1>
        </div>';
        echo '<h2> Lemas</h2>';
        // utiliza de sistemas que 
        echo '<div id="lemas"> <p>Be Whats Next</p>';
        echo '<p>Your potential. Our passion.</p>';
        echo '<p>Where do you want to go today?</p> </div>';
    ?>
</body>
</html>