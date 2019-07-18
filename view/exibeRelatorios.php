<?php

include_once "../model/geral.php";
// var_dump($_POST["formato"]);

// $_POST["formato"] = "";

// var_dump($_POST["formato"]);
if (isset($_POST) && isset($_POST["formato"])) {
    // var_dump($_POST["formato"]);
    // var_dump($_POST["data-especificada"]);
    if ($_POST["formato"] == "data-expecifica" && $_POST["data-especificada"] <> "" ) {
        $displayTable = relatorioEspecificado($_POST["data-especificada"]);
    } else if($_POST["formato"] == "periodo-expecifico") {
        $displayTable = relatorioPeriodoEspecificado($_POST["data-inicial"], $_POST["data-final"]);
    } else if($_POST["formato"] == "historico-completo") {
        $displayTable = relatorioCompleto();
    } else {
        echo "<br> Chegou no ELSE";
    }
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
            Relatório
        </div>
        <div class="card-body">
        <table class='table'>
        <?php echo $displayTable ?>
        </table>

                <div class="row btn-row completo">
                <a href="relatorios.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Gerar Novo Relatório</a>
                    <a href="../index.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Retornar ao
                        Inicio</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>