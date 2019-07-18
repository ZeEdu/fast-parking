<?php

include_once "../model/geral.php";

if ($_POST) {
    entrada ($_POST);
    $recebeImpCorpo = impressaoCorpo ($_POST);
    
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
    <title>Fast Parking - Recibo </title>
</head>

<body>
    <div class="card mx-auto mt-5 container" style="width:60vw">
        <div class="card">
            <div class="card-header text-center">
                Recibo
            </div>

            <?php echo $recebeImpCorpo; ?>

            <div class="row btn-row">
                <a href='entrada.php' class='btn btn-primary btn-lg' role='button' aria-disabled='true'> Nova
                    Entrada</a>
                <a href='painelInicial.php' class='btn btn-danger btn-lg' role='button' aria-disabled='true'> Retornar
                    ao Inicio</a>
            </div>
        </div>
        <script src="../js/cadastro.js" type="module"></script>
</body>

</html>