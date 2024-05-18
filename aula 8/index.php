<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>
        tela de login
    </h1>
    <form action="sessao.php" method="post">
        <div>
            <label for="user">usuario</label>
            <input type="text"  name ="user"id ="user">
        </div>
        <div>
            </label>
            <label for="password">Senha</label>
            <input type="text"  name ="password" id="password">
        </div>
        <div class ="conteiner-btn">
            <button type="submit">Entrar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>