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
            Gerar Relatórios
        </div>
        <div class="card-body">
            <form action="exibeRelatorios.php" method="post">
                <div class="row">
                <div class="form-check col-12">
                        <input class="form-check-input" type="radio" name="formato" id="data-expecifica"
                            value="data-expecifica" checked>
                        <label class="form-check-label" for="data-expecifica">
                            Uma Data Específica
                        </label>
                    </div>
                    <div class="form-group col-12 especifico">
                        <input class="form-control" type="date" name="data-especificada" id="data-especificada">
                    </div>
                    <div class="form-check col-12">
                        <input class="form-check-input" type="radio" name="formato" id="periodo-expecifico"
                            value="periodo-expecifico">
                        <label class="form-check-label" for="periodo-expecifico">
                            Especificar um Período
                        </label>
                    </div>
                    <div class="form-group col-6 periodo">
                        <input class="form-control" type="date" name="data-inicial" id="data-inicial">
                    </div>
                    <div class="form-group col-6 periodo">
                        <input class="form-control" type="date" name="data-final" id="data-final">
                    </div>
                    <div class="form-check col-12">
                        <input class="form-check-input" type="radio" name="formato" id="historico-completo"
                            value="historico-completo">
                        <label class="form-check-label" for="historico-completo">
                            Todo o Histórico
                        </label>
                    </div>
                </div>
                <div class="row btn-row completo">
                    <input class="btn btn-success btn-lg" type="submit" value="Gerar Relatório" id="check-in">
                    <a href="../index.php" class="btn btn-danger btn-lg" role="button" aria-disabled="true">Retornar ao
                        Inicio</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>