<?php

$conexao = new mysqli("localhost", "root", "odestinoeinexoravel", "fast-parking");

$conexao->set_charset("utf8"); 
return $conexao;