<?php
$servidor ='localhost';
$banco_de_dados = 'artistas';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor,$usuario,$senha,$banco_de_dados);
if ($mysqli -> error ){
    die ('falha ao conectar ao banco de dados');
}







?>