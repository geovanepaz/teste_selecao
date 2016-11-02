<?php

//model/Clases
require_once '../model/db_antigo/classes/Dados_antigos.php';
require_once '../model/db_novo/classes/Produtos.php';
require_once '../model/db_novo/classes/Cores.php';
require_once '../model/db_novo/classes/Produtos_cores.php';
require_once '../model/db_novo/classes/Tamanhos.php';
require_once '../model/db_novo/classes/Produtos_tamanhos.php';

//model/DAO
require_once '../model/db_antigo/DAO/DAODados_antigos.php';
require_once '../model/db_novo/DAO/DAOProdutos.php';
require_once '../model/db_novo/DAO/DAOCores.php';
require_once '../model/db_novo/DAO/DAOProdutos_cores.php';
require_once '../model/db_novo/DAO/DAOTamanhos.php';
require_once '../model/db_novo/DAO/DAOProdutos_tamanhos.php';

//model/manager
require_once '../model/db_novo/manager/produtos/AdicionarProduto.php';
require_once '../model/db_novo/manager/cores/AdicionarCores.php';
require_once '../model/db_novo/manager/produto_cores/AdicionarProdutosCores.php';
require_once '../model/db_novo/manager/tamanhos/AdicionarTamanhos.php';
require_once '../model/db_novo/manager/produtos_tamanhos/AdicionarProdutosTamanhos.php';

//conexão com o bamco
require_once 'conexao.php';

$conexao = conexao::getInstance();



//instancias das classes
$produtos = new Produtos();
$cores = new Cores();
$proCores = new Produtos_cores();
$tamanhos = new Tamanhos();
$prodTamanho = new Produtos_tamanhos();


//DAOs
$daoProdutos = new DAOProdutos($conexao);
$daoCores = new DAOCores($conexao);
$daoProdCores = new DAOProdutos_cores($conexao);
$daoTamanhos = new DAOTamanhos($conexao);
$daoProdTamanho = new DAOProdutos_tamanhos($conexao);

//buscar dados antigo
$daoAntigo = new DAODados_antigos($conexao);
$dados = $daoAntigo ->listar();

//for para passar por todos dados antigos e ir inserindo nas novas tabelas;
foreach ($dados as $valor) {

    ///add na tabela produtos
    $idProd = AdicionarProduto::adicionar($valor,$produtos,$daoProdutos);

   //add na tabela cores
    $idCores = AdicionarCores::adicionar($valor,$cores,$daoCores);

    //add na tabela tamanho
    $idTamanhos = AdicionarTamanhos::adicionar($valor,$tamanhos,$daoTamanhos);

    //add na tabela produtos cores
    $idProdCores = AdicionarProdutosCores::adicionar($idProd,$idCores,$proCores,$daoProdCores);

    ///add na tabela produtos tamanhos
    AdicionarProdutosTamanhos::adicionar($idProdCores,$idTamanhos,$prodTamanho,$daoProdTamanho);

}

echo 'Banco migrado com sucesso';
