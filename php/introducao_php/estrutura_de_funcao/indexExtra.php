<?php

function numeroletras($nomeUsuario){
    $numeroLetras = strlen($nomeUsuario);
    return "O seu nome, $nomeUsuario, contém $numeroLetras letras!";
}

echo numeroLetras('Thayssa');


?>