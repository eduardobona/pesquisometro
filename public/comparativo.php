<?php

include __DIR__ . '/../src/ResultadoVotosValidos.php';

$comparaResultado = new ResultadoVotosValidos(    
    '../pesquisas/majoritarias/2018/BR/resultado.json',
    '../pesquisas/majoritarias/2018/BR/datafolhaVotosTotais.json'
);
$retorno = $comparaResultado->getComparacao();

echo '<pre>';
print_r($retorno);
echo '</pre>';