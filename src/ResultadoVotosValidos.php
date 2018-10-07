<?php

class ResultadoVotosValidos
{
    private $caminhoJsonPesquisa;
    private $caminhoJsonResultado;

    public function __construct($caminhoJsonResultado, $caminhoJsonPesquisa)
    {
        $this->caminhoJsonPesquisa = $caminhoJsonPesquisa;
        $this->caminhoJsonResultado = $caminhoJsonResultado;
    }

    public function getComparacao()
    {
        $arrayPesquisa = json_decode(file_get_contents($this->caminhoJsonPesquisa), true);
        $arrayResultado = json_decode(file_get_contents($this->caminhoJsonResultado), true);

        $numerosPesquisa = $arrayPesquisa['resultado'][0];
        $numerosResultado = $arrayResultado['resultado'][0];

        $resultadoComparado = array();

        foreach($numerosPesquisa as $candidato => $porcentagem) {
            foreach($numerosResultado as $candidatoResultado => $porcentagemResultado) {
                if($candidato == $candidatoResultado){
                    $resultadoComparado[$candidato]  = $porcentagemResultado - $porcentagem;
                }
            }            
        }

        return $resultadoComparado;

    }
    
}
