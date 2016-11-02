<?php

class DAOProdutos
{

    private $conexao;
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function cadastrar(Produtos $produtos){

        $titulo = $produtos->getTitulo();
        $codigo = $produtos->getCodigo();

        $sql = "INSERT INTO produtos (titulo,codigo) VALUES('$titulo','$codigo')";
        $stmt = $this->conexao->prepare($sql);


        if ($stmt->execute()) {
            if ($stmt->rowCount())
                return $this->conexao->lastInsertId();
        } else {
            $error = $stmt->errorInfo();
            echo $error[2];
        }

        return false;
    }

    public function __destruct()
    {
        $this->conexao = null;
    }

}