<?php


class Produtos_cores
{
    private $id;
    private $id_cor;
    private $id_produto;

    /**
     * produtos_tamanhos constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdCor()
    {
        return $this->id_cor;
    }

    /**
     * @param mixed $id_cor
     */
    public function setIdCor($id_cor)
    {
        $this->id_cor = $id_cor;
    }

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->id_produto;
    }

    /**
     * @param mixed $id_produto
     */
    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }



}