<?php

include_once "../model/geral.php";

if ($_POST) {
    entrada ($_POST);
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
    <title> Fast Parking</title>
</head>

<body>
    <div class="card mx-auto mt-5 container" style="width:60vw">
        <div class="card-header text-center">
            Check-in de Cliente
        </div>
        <div class="card-body">
            <form action="entrada.php" method="post">
                <div class="row">
                    <div class="form-group col-12">
                        <input class="form-control" type="text" name="nome" placeholder="Nome Completo do Cliente" id="nome">
                    </div>
                    <div class="form-group col-6">
                        <input class="form-control" type="text" name="modelo" placeholder="Modelo do Veículo" id="modelo">
                    </div>
                    <div class="form-group col-6">
                        <input class="form-control" type="text" name="placa" placeholder="Placa do Veículo" id="placa">
                    </div>
                </div>
                <div class="row btn-row">
                    <input class="btn btn-success btn-lg" type="submit" value="Enviar Dados" id="check-in">
                    <a href="../index.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Retornar ao Inicio</a>
                </div>
            </form>
        </div>
    </div>

    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>