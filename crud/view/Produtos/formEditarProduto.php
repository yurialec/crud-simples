<?php
require_once '../../model/Produtos/Produto.php';
require_once '../../model/Produtos/ProdutoDao.php';

$idprod = $_GET['id'];

$produtoDao = new ProdutoDao();
$produto = $produtoDao->getProdutoById($idprod);
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
    <title>Editar produto</title>
</head>

<body>
    <div class='d-flex justify-content-center'>
        <h3>Editar Produto</h3>
    </div><br><br>
    <div class='d-flex justify-content-center'>
        <form method="post" action="../../controller/Produto/editarProdutoController.php">
            <?= "<input type='hidden' name='idprod' value='$produto[IDPROD]'/>" ?>
            <?= "<input type='text' name='nome' value='$produto[NOME]'/>" ?><br><br>
            <?= "<input type='text' name='cor'  value='$produto[COR]' />"; ?><br><br>
            <?= "<input type='text' name='preco' id='preco' value='$produto[PRECO]''/>"; ?><br><br>
            <button class='btn btn-outline-warning'> Editar </button>
        </form>
    </div>
    <br>
    <div class='d-flex justify-content-center'><a href="../../index.php">Listar Produtos</a></div>
    
    <!-- Mascara para alterar valor -->
    <script type="text/javascript">
        $(document).ready(function() {
            var $preco = $("#preco");
            $preco.mask('0000000.00', {
                reverse: true
            });
        });
    </script>
</body>

</html>