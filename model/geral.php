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
    return "<div class='card-body'>
          <h5 class='card-title'>Recibo de Entrada</h5>
          <p class='card-text'>Nome do Cliente: ".$dados['nome']."</p>
          <p class='card-text'>Modelo do Veículo: ".$dados['modelo']."</p>
          <p class='card-text'>Placa do Veículo: ".$dados['placa']."</p>
          <p class='card-text'>Expedição do Recibo: ".date('Y-m-d H:i:s')."</p>
    </div>";
}

function saida($dados){
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
      $primeiraHora = $_SESSION['primeiraHora'];
      $segundaHora = $_SESSION['segundaHora'];
      $pagamento = calcularpagamento($primeiraHora, $segundaHora, $diferencaHoras);
      guardarRelatorio($dataId, $dataHoraAtual, $pagamento);
  } else {
    echo "Erro de Conexão";
  }
}

function relatorioEspecificado($dataEspecificada){
  $conexao = include_once("conexao.php");
  $sql = "SELECT id, modelo, placa, entrada, saida, pagamento FROM clientes WHERE saida BETWEEN '".$dataEspecificada." 00:00:00' AND '".$dataEspecificada." 23:59:59'";
  $consulta = $conexao->query($sql);
  $tableBody = "";  
  while ($tableContent = $consulta->fetch_array()) {
            $tableBody .= "<tr>
                              <th>".$tableContent['id']."</th>
                              <td>".$tableContent['modelo']."</td>
                              <td>".$tableContent['placa']."</td>
                              <td>".$tableContent['entrada']."</td>
                              <td>".$tableContent['saida']."</td>
                              <td>".$tableContent['pagamento']."</td>
                          </tr>";
  }
  $consulta->close();
  $conexao->close();
  return $tableBody;
}

function relatorioPeriodoEspecificado($dataInicial, $dataFinal){
  $conexao = include_once("conexao.php");
  $sql = "SELECT id, modelo, placa, entrada, saida, pagamento FROM clientes WHERE saida BETWEEN '".$dataInicial." 00:00:00' AND '".$dataFinal." 23:59:59'";
  $consulta = $conexao->query($sql);
  $tableBody = "";  
  while ($tableContent = $consulta->fetch_array()) {
            $tableBody .= "<tr>
                              <th>".$tableContent['id']."</th>
                              <td>".$tableContent['modelo']."</td>
                              <td>".$tableContent['placa']."</td>
                              <td>".$tableContent['entrada']."</td>
                              <td>".$tableContent['saida']."</td>
                              <td>".$tableContent['pagamento']."</td>
                          </tr>";
  }
  $consulta->close();
  $conexao->close();
  return $tableBody;
}

function relatorioCompleto(){
  $conexao = include_once("conexao.php");
  $sql = "SELECT id, modelo, placa, entrada, saida, pagamento FROM clientes WHERE saida IS NOT NULL ORDER BY saida ASC";
  $consulta = $conexao->query($sql);
  $tableBody = "";  
  while ($tableContent = $consulta->fetch_array()) {
            $tableBody .= "<tr>
                              <th>".$tableContent['id']."</th>
                              <td>".$tableContent['modelo']."</td>
                              <td>".$tableContent['placa']."</td>
                              <td>".$tableContent['entrada']."</td>
                              <td>".$tableContent['saida']."</td>
                              <td>".$tableContent['pagamento']."</td>
                          </tr>";
  }
  $consulta->close();
  $conexao->close();
  return $tableBody;
}