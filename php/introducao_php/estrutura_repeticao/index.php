<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        font-size: 30px;
        background-color: white;
    }
    div {
        display: flex;
        justify-content: center;
        gap: 10px;
        padding-bottom: 1px;
        padding-top: 1px;
        color: black;
    }
    table{
        background-color: lightskyblue;
    }
</style>
<body>
    <?php
    echo "<div>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<table border='1' bordercolor='black' cellspacing='0' cellpadding='3'><th>$i</th>";
            for ($x = 0; $x <= 10; $x++){
                echo "<tr><td>$i x $x = ".($i*$x)."<br></td></tr>";
            };
            echo " <br> ";
            echo "</table>";
        };
    echo "</div>";
    echo "<hr>";

    echo "<div>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<table border='1' bordercolor='black' cellspacing='0' cellpadding='3'><th>$i</th>";
            for ($x = 0; $x <= 10; $x++){
                $resultado = ($i * $x) % 2;
                echo "" .($resultado). "";
                echo "<tr><td> ".($i*$x)." é " .($resultado = 0 ? "par" : "ímpar")."<br></td></tr>";
            };
            echo " <br> ";
            echo "</table>";
        };
    echo "</div>";


    ?>
</body>
</html>