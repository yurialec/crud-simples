<?php
require_once '../../model/Produtos/Produto.php';
require_once '../../model/Produtos/ProdutoDao.php';

//Recuperar dados do formulário
$nome = $_POST['nome'];
$cor = $_POST['cor'];
$preco_inserido = $_POST['preco'];

echo $cor . "<br>";
echo $preco_inserido . "<br>";

$pctm_azul = 20.00;
$pctm_vermelho = 20.00;
$pctm_vermelho_2 = 5.00;
$pctm_amarelo = 10.00;

//Calculo de desconto
if ($cor == "Azul") {
    $resultado = $preco_inserido - ($preco_inserido * $pctm_azul / 100);
}

if ($cor == "Vermelho"){

    $resultado = $preco_inserido - ($preco_inserido * $pctm_vermelho / 100);
}

if ($cor == "Amarelo") {
    $resultado = $preco_inserido - ($preco_inserido * $pctm_amarelo / 100);
}

//Acessar método para inserir no banco de dados
$produto = new Produto();
$produto->setNome($nome);
$produto->setCor($cor);
$produto->setPreco($resultado);

$produtoDao = new ProdutoDao();
$produtoDao->create($produto);

header('Location:../../index.php');
