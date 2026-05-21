<?php 
session_start();

$_SESSION["usuario"] = "Jorge";
echo "Usuário armazena na sessão <br><pre>";

var_dump($_SESSION);
echo "</pre>";
?>