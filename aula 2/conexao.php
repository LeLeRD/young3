<?php
$servidor ='localhost';
$bancp_de_dados = 'login';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco_de_dados);
if ($mysqli -> error ){
    die ('falha ao conectar ao banco de dados');
}







?>