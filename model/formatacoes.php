<?php

function diferenciarData($dataUm, $dataDois, $formato){
    $dtEntrada = date_create($dataUm);
    $dtSaida = date_create($dataDois);
    $diferenca = date_diff($dtEntrada, $dtSaida);
    $diferencaFormatada = $diferenca->format($formato);
    return $diferencaFormatada;
}
function formatarData($data){
    $dataIndentificada = strtotime($data);
    $dataFormatada = date('Y-m-d H:i:s', $dataIndentificada);
    return $dataFormatada;
}

function calcularpagamento($precoUm, $precoDois, $tempo){
    if ( $tempo > 1 ) {
        $precoFinal = ( ( ( $tempo - 1 ) * $precoDois ) + $precoUm );
    }
    return $precoFinal;
}

function guardarRelatorio($dataId, $saida, $pagamento){
    $conexao = include_once("conexao.php");
    $sql = "UPDATE clientes SET saida = '".$saida."', pagamento = ".$pagamento."  WHERE id = ".$dataId."";
    if (is_object($conexao)){
        echo "É objeto";
    } else {
        echo "Não é objeto";
    }
    $conexao->query($sql);
    $conexao->close();
}

