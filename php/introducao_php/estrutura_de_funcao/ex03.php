<?php
function calcularTempoEmpresa($anoFundacao, $anoAtual) { 
    return $anoAtual - $anoFundacao;
}

$tempo = calcularTempoEmpresa(2015, 2026);

echo "Tempo de empresa: $tempo anos";

?>