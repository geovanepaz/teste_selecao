<?php


class Produtos_tamanhos
{
    private $id;
    private $id_produto_cor;
    private $id_tamanho;

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
    public function getIdProdutoCor()
    {
        return $this->id_produto_cor;
    }

    /**
     * @param mixed $id_produto_cor
     */
    public function setIdProdutoCor($id_produto_cor)
    {
        $this->id_produto_cor = $id_produto_cor;
    }

    /**
     * @return mixed
     */
    public function getIdTamanho()
    {
        return $this->id_tamanho;
    }

    /**
     * @param mixed $id_tamanho
     */
    public function setIdTamanho($id_tamanho)
    {
        $this->id_tamanho = $id_tamanho;
    }




}