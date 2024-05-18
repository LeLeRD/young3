<?php
session_start();
$nome_usuario = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>painel</title>
</head>
<body>
    <h1>bem vindo<?php echo $nome_usuario;?> </h1>
    <p><a href="logouat.php">sair</a></p>
    <footer>
        <p>"nao concordo nem discordo, muito pelo contrario"</p>
    </footer>
</body>
</html>