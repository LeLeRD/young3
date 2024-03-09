<?php
include('conexao.php');

if (isset($_post['email'])||isset($_post['pass']))
{
    if (strlan($_post['email'])== 0)
}

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


echo $sql_query;


}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2 - login com DB</title>
</head>
<body>
    <div>
        <h1>
            acesse sua conta
        </h1>
        <form action="" method="post">
            <div>
                <label>email</label>
                <input type="email" name="email"
                required>
            </div>
            <div>
                <label>minha senha</label>
                <input type="password" name = 'pass' required>
            </div>
           <button type="submit">entrar</button>
        </form>
    </div>
</body>
</html>