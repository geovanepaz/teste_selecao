<?php

class AdicionarTamanhos
{

    public function __construct()
    {

    }

    static function adicionar($dados, Tamanhos $tamanhos, $dao){

        $tamanhos->setTitulo($dados->tamanho);

        //Verifica se o dado ja foi inserido caso sim retorna o id;
        $aux = $dao->listar($tamanhos);
        if ($aux)
            $id = $aux->id;
        else
            $id = $dao->cadastrar($tamanhos);

        return $id;

    }


}