<?php


class DAOCores
{

    private $conexao;

    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function cadastrar(Cores $cores){

        $titulo = $cores->getTitulo();

        $sql = "INSERT INTO cores (titulo) VALUES('$titulo')";
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

    public function listar(Cores $cores){

        $titulo = $cores->getTitulo();
        $sql = "SELECT id FROM cores WHERE titulo  = '$titulo'";
        $stmt = $this->conexao->prepare($sql);

        if($stmt->execute()){
            if($stmt->rowCount()){
                $retorno = $stmt->fetch(PDO::FETCH_OBJ);
                return $retorno;

            }else{
                return false;
            }
        }else{
            throw new Exception($stmt->errorInfo());

        }

    }

    public function __destruct()
    {
        $this->conexao = null;
    }


}