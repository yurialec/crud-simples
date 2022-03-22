<?php
$search = $_POST["search"];
$connect = mysqli_connect("localhost", "root", "", "loja");
$output = '';
$sql = "SELECT * FROM produtos WHERE NOME LIKE '%" . $search . "%'";
$result = mysqli_query($connect, $sql);
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
        <?php
        if (mysqli_num_rows($result) > 0) {

            $output .= '<h4 align="center">Resultados</h4>';
            $output .= '<div class="table-responsive">
                    <table class="table table bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cor</th>
                        <th scope="col">Preço</th>
                    </tr>
                    </thead>          
                </div>';

            while ($row = mysqli_fetch_array($result)) {

                $output .= '
                    <tbody>
                    <tr>
                        <td>' . $row["IDPROD"] . '</td>
                        <td>' . $row["NOME"] . '</td>
                        <td>' . $row["COR"] . '</td>
                        <td>' . $row["PRECO"] . '</td>
                    </tr>
                    </tbody>
        ';
            }
            echo $output;
        } else {
            echo "Nenhum resultado encontrado";
        }
        ?>
        <a href="../../index.php">Listar Produtos</a>
    </div>