<?php

include('../conections/conections.php');

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $cod_sql ="DELETE FROM produtos WHERE id = '$id'";
    
    if($mysqli->query($cod_sql)==TRUE)
    {
        header('location;lsitar-produtos.php');
    }
    else
    {
        echo 'deu ruim'.$mysqli->error;
    }
}
$mysqli->close();
?>