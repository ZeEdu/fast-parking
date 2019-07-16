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
    <?php echo $recebeImpCorpo; ?>

    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>