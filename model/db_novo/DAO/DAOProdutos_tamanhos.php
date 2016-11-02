<?php

class DAOProdutos_tamanhos
{
    private $conexao;
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }


    public function cadastrar(Produtos_tamanhos $prodTamanho){

        $id_produto_cor = $prodTamanho->getIdProdutoCor();
        $id_tamanho = $prodTamanho->getIdTamanho();


        $sql = "INSERT INTO produtos_tamanhos (id_produto_cor,id_tamanho) VALUES($id_produto_cor,$id_tamanho)";
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