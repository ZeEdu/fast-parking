<?php

function checkIn ($dados) {
    $conexao = include_once("conexao.php");
    $sql = "insert into usuarios (nome, modelo, placa, hora, data)
            values ('$dados[nome]', '$dados[modelo]', '$dados[placa]', 'CURDATE()', 'CURTIME()')";
    print_r($sql);
    $conexao->query ($sql);
    $conexao->close();
}