<?php
include_once '../../model/Produtos/Produto.php';
include_once '../../model/Produtos/ProdutoDao.php';

//Recuperar dados do formulário
$nome = $_POST['nome'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$idprod = $_POST['idprod'];

$produto = new Produto();
$produto->setNome($nome);
$produto->setCor($cor);
$produto->setPreco($preco);
$produto->setIdProd($idprod);

$produtoDao = new ProdutoDao();
$produtoDao->update($produto);

header('Location:../../index.php');