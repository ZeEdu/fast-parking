<?php

include_once "../model/geral.php";
session_start();
$sessionVarSet = "";
if ($_POST) {
    $_SESSION['primeiraHora'] = $_POST['primeira-hora'];
    $_SESSION['segundaHora'] = $_POST['horas-seguintes'];
    $sessionVarSet = "<span> Adicionados </span>";
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
            Preços <?php echo $sessionVarSet ?>
        </div>
        <div class="card-body">
            <form action="precos.php" method="post">
                <div class="row">
                    <div class="form-group col-12">
                        <input class="form-control" type="number" name="primeira-hora" placeholder="Preço Primeira Hora"
                            id="primeira-hora">
                    </div>
                    <div class="form-group col-12">
                        <input class="form-control" type="number" name="horas-seguintes"
                            placeholder="Preço Horas Subsequentes" id="demais-hora">
                    </div>

                </div>
                <div class="row btn-row">
                    <input class="btn btn-success btn-lg" type="submit" value="Atualizar Preços" id="check-out">
                    <a href="../index.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Retornar ao Inicio</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>