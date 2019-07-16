<?php

function entrada ($dados) {
    $conexao = include_once("conexao.php");    
    $sql = "insert into clientes (nome, modelo, placa, hora, data) 
            values ('$dados[nome]', '$dados[modelo]', '$dados[placa]', CURTIME(), CURDATE())";
    $conexao->query ($sql);
    var_dump($sql);
    $conexao->close();
}
function saida ($dados){
    $conexao = include_once("conexao.php");    
    $sql = "insert into clientes (nome, modelo, placa, hora, data) 
            values ('$dados[nome]', '$dados[modelo]', '$dados[placa]', CURTIME(), CURDATE())";
    $conexao->query ($sql);
    var_dump($sql);
    $conexao->close();
}