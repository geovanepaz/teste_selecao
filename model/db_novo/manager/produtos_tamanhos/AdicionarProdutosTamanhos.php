<?php

class AdicionarProdutosTamanhos
{
    /**
     * AdicionarProdutosTamanhos constructor.
     */
    public function __construct()
    {
    }

    static function adicionar($idProdCores, $idTamanhos, Produtos_tamanhos $prodTamanho, $dao){

        $prodTamanho->setIdProdutoCor($idProdCores);
        $prodTamanho->setIdTamanho($idTamanhos);

        $id = $dao->cadastrar($prodTamanho);

        return $id;

    }


}