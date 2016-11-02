<?php

class AdicionarProdutosCores
{
    /**
     * AdicionarProdutosCores constructor.
     */
    public function __construct()
    {
    }

    static function adicionar($idProd, $idCores, Produtos_cores $proCores, $dao){


        $proCores->setIdCor($idCores);
        $proCores->setIdProduto($idProd);

        $id = $dao->cadastrar($proCores);

        return $id;
    }


}