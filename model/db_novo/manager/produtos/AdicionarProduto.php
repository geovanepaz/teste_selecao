<?php

class AdicionarProduto
{
    /**
     * AdicionarProduto constructor.
     */
    public function __construct()
    {
    }

    static function adicionar($dados, Produtos $produtos, $dao)
    {
        //setando o objeto produtos
       $produtos->setTitulo($dados->titulo);
       $produtos->setCodigo($dados->codigo);

       $id = $dao->cadastrar($produtos);

        return $id;


    }

}