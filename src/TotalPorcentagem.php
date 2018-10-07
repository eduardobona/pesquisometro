<?php

class TotalPorcentagem
{
    private $caminhoJson;

    public function __construct($caminhoJson)
    {
        $this->caminhoJson = $caminhoJson;
    }

    public function getTotalPorcentagem()
    {
        $arrayPesquisa = json_decode(file_get_contents($this->caminhoJson), true);
        $resultado = $arrayPesquisa['resultado'][0];
        
        return array_sum($resultado);
    }
}
