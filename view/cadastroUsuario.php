<?php

include_once "../model/usuarios.php";

if ($_POST) {
    adicionarUsuario ($_POST);
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
    <title>Cadastro de Usuário</title>
</head>

<body>
    <div class="card mx-auto mt-5 container" style="width:60vw">
        <div class="card-header text-center">
            Agenda - Fatec São Roque
        </div>
        <div class="card-body">
            <form action="cadastroUsuario.php" method="post">
                <div class="row">
                    <div class="form-group col-6">
                        <input class="form-control" type="text" name="nome" placeholder="Nome Completo" id="nome">
                    </div>
                    <div class="form-group col-3">
                        <input class="form-control" type="text" name="cidade" placeholder="Cidade" id="cidade">
                    </div>
                    <div class="form-group col-3">
                        <input class="form-control" type="date" name="data" placeholder="Login" id="data">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <input class="form-control" type="text" name="usuario" placeholder="Login" id="usuario">
                    </div>
                    <div class="form-group col-4">
                        <input class="form-control" type="password" name="senha" placeholder="Senha" id="senha">
                    </div>
                    <div class="form-group col-4">
                        <input class="form-control" type="password" name="senha" placeholder="Confirmar Senha"
                            id="confirmar">
                    </div>
                </div>
                <div class="row btn-row">
                    <input class="btn btn-success col-3" type="submit" disabled value="Criar Usuário" id="criar">
                    <input class="btn btn-warning col-3" type="button" value="Limpar Formulário" id="limpar">
                    <a class="btn btn-danger col-3" href="http://localhost/agenda/view/login.php">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/cadastro.js" type="module"></script>
</body>

</html>