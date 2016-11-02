<?php

class dados_antigos
{
    private $codigo;
    private $titulo;
    private $cor;
    private $tamanho;

    /**
     * dados_antigos constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * @param mixed $tamanho
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }


}