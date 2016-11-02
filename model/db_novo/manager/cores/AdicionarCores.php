<?php

class AdicionarCores
{

    /**
     * AdicionarCores constructor.
     */
    public function __construct()
    {
    }

    static function adicionar($dados, Cores $cores, $dao)
    {
        $cores->setTitulo($dados->cor);

        //verifica se a cor ja foi adicionada na tabela caso verdadeiro pega o id;
        $aux = $dao->listar($cores);
        if ($aux)
            $id = $aux->id;
        else
            $id = $dao->cadastrar($cores);

        return $id;


    }



}