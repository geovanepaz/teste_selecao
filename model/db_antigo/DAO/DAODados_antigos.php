<?php


class DAODados_antigos
{
    private $dbh;

    public function __construct(PDO $dbh){

        $this->dbh = $dbh;
    }



    public function listar(){

        $sql = "SELECT codigo, titulo, cor, tamanho FROM dados_antigos";
        $stmt = $this->dbh->prepare($sql);


        if($stmt->execute()){
            if($stmt->rowCount()){
                $retorno = $stmt->fetchAll(PDO::FETCH_OBJ);
                return $retorno;

            }else{
                return false;
            }

        }else{
            //$this->dbh= null;
            throw new Exception($stmt->errorInfo());

        }

    }


    public function __destruct()
    {
        $this->dbh = null;
    }


}