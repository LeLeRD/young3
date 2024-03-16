<?php
include('conexao.php');

if (isset($_post['email'])||isset($_post['pass']))
{
    if (strlen($_post['email'])== 0)
    {
        echo "preecnha seu email";
    }
    else if (strlen($_post['passs'])== 0)
    {
        echo"preencha sua senha";
    }
    else
    {
    
    $email = $_post['email'];
    $pass =$_post['pass'];
    
    $sql_codigo = "SELECT * FROM dados WHERE email = '$email'  AND senha = '$pass'";
    
    $sql_query = $mysql->query($sql_codigo) or die ('falha de execuçao:'.$mysqli->error);
    
    
    $quantidade =$sql_query -> num_rows;
    if ($quantidade == 1)

    {
        $usuario = ($sql_query ->fetch_assoc());
        var_dump( $usuario['nome']);
        var_dump( $usuario['id']);

    }
    else
    {
        echo " falha ao logar";
    }
}





?>