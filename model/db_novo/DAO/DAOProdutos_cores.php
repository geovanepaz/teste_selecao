<?php

class DAOProdutos_cores
{
    private $conexao;
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function cadastrar(Produtos_cores $prodCores){

        $id_cor = $prodCores->getIdCor();
        $id_produto = $prodCores->getIdProduto();

        $sql = "INSERT INTO produtos_cores (id_cor, id_produto) VALUES($id_cor,$id_produto)";
        $stmt = $this->conexao->prepare($sql);


        if ($stmt->execute()) {
            if ($stmt->rowCount())
                return $this->conexao->lastInsertId();

        } else {
            $error = $stmt->errorInfo();
            echo $error[2];
        }

        return  false;

    }

    public function __destruct()
    {
        $this->conexao = null;
    }


}