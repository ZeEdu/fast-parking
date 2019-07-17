<?php

include_once "../model/geral.php";




if ($_POST) {
    getPost ($_POST);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <title>Fast Parking</title>
</head>

<div class="card mx-auto mt-5 container" style="width:60vw">
    <div class="card-header text-center">
        Tela Inicial
    </div>
    <div class="card-body">
        <div class="row btn-row">
        <a href="entrada.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Realizar Check-in</a>
        <a href="saida.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Realizar Check-out</a>
        <a href="preco.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Ajustar Preços</a>
        <a href="relatorios.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Relatórios</a>
        </div>
    </div>
</div>

<body>
    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>