<?php

include __DIR__ . '/../src/TotalPorcentagem.php';

// Recebe no construtor o caminho do JSON que será somado o total da porcentagem
$totalPorcentagem = new TotalPorcentagem('../pesquisas/majoritarias/2018/BR/datafolhaVotosValidos.json');
$porcentagemTotal = $totalPorcentagem->getTotalPorcentagem();

echo $porcentagemTotal;