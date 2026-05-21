<form method="GET">
    <label>Nome:</label>
    <input type="text" name="nome">
    <input type="submit" value="Enviar">
</form>

<?php
// Variável global que puxa a variável de dentro de um atributo "global"
    $nome = $_GET["nome"];
    echo "Nome informado: $nome";
?>