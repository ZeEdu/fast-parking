<?php

include_once "formatacoes.php";

function entrada ($dados) {
    $conexao = include_once("conexao.php");    
    $sql = "insert into clientes (nome, modelo, placa, entrada) 
            values ('$dados[nome]', '$dados[modelo]', '$dados[placa]', LOCALTIME())";
    $conexao->query ($sql);
    $conexao->close();

}

function impressaoCorpo($dados){
    return "<div class='row'>
    <div class=col-12>
      <div class='card'>
        <div class='card-body'>
          <h5 class='card-title'>Recibo de Entrada</h5>
          <p class='card-text'>Nome do Cliente: ".$dados['nome']."</p>
          <p class='card-text'>Modelo do Veículo: ".$dados['modelo']."</p>
          <p class='card-text'>Placa do Veículo: ".$dados['placa']."</p>
          <p class='card-text'>Expedição do Recibo: ".date('Y-m-d H:i:s')."</p>
          <a href='entrada.php' class='btn btn-danger btn-lg' role='button' aria-disabled='true'> Retornar ao Inicio</a>
        </div>
      </div>
    </div>
    </div>";
}


function buscaSaida($dados){
  
  $conexao = include_once("conexao.php");
  $sql = "SELECT id, entrada FROM clientes WHERE placa = '$dados[placa]' AND saida IS NULL";
  if ($consulta = $conexao->query($sql)) {
      $obj = $consulta->fetch_object();
      $dataId = $obj->id;
      $dataEntrada = $obj->entrada;
      $dataFormatada = formatarData($dataEntrada);
      $dataHoraAtual = date('Y-m-d H:i:s');
      $definirFormatoDiferenca = '%h';
      $diferencaHoras = diferenciarData($dataFormatada, $dataHoraAtual, $definirFormatoDiferenca);
      $primeiraHora = 15;
      $segundaHora = 5;
      $pagamento = calcularpagamento($primeiraHora, $segundaHora, $diferencaHoras);
      guardarRelatorio($dataId, $dataHoraAtual, $pagamento);
  } else {
    echo "Erro de Conexão";
  }
}

function saida ($dados){
    $conexao = include_once("conexao.php");
    $sql = "update clientes set saida = LOCALTIME() WHERE placa = '$dados[placa]'";
    $conexao->query ($sql);
    $conexao->close();
}