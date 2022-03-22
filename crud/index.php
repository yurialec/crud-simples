<?php

require_once 'model/Produtos/Produto.php';
require_once 'model/Produtos/ProdutoDao.php';

//Carregamento da classe de listagem
$produtoDao = new ProdutoDao();
$produtoDao->read();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
	<title>Index Produtos</title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand">Listar Produtos</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="view/Produtos/formCadastrarProduto.php">Cadastrar novo <span class="sr-only">(current)</span></a>
					</li>
					<form class="form-inline my-2 my-lg-0" method="POST" action="view/Produtos/resultadoConsulta.php">
						<input type="text" name="search" id="search" placeholder="Pesquisar produto" class="form-control">
						<button>Pesquisar</button>
					</form>
			</div>
		</nav>
		<nav class="navbar navbar-light bg-light justify-content-between">
			<div class="table">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col">Cor</th>
							<th scope="col">Preço</th>
							<th scope="col">Ações</th>
						</tr>
					</thead>
					<?php foreach ($produtoDao->read() as $produto) : ?>
						<tbody>
							<tr>
								<th scope="row"><?= $produto['IDPROD'] ?></th>
								<td><?= $produto['NOME'] ?></td>
								<td><?= $produto['COR'] ?></td>
								<td><?= "R$" . $produto['PRECO'] ?></td>
								<td><?= "<a class='btn btn-outline-warning' role='button' href='view/Produtos/formEditarProduto.php?id={$produto['IDPROD']}'> Editar </a>" ?><?= "<a class='btn btn-outline-danger' role='button' href='Controller/Produto/excluirProdutoController.php?id={$produto['IDPROD']}'> Apagar</a>" ?></td>
							</tr>
						</tbody>
					<?php endforeach; ?>
				</table>
			</div>
	</div>
	</div>
</body>

</html>