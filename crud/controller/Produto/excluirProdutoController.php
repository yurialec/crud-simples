<?php

require_once '../../model/Produtos/Produto.php';
require_once '../../model/Produtos/ProdutoDao.php';

$idprod = $_GET['id'];

$produtoDao = new ProdutoDao();
$produtoDao->delete($idprod);

header('Location:../../index.php');
?>