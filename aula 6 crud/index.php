<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <main>
        <h1>
            adicionar produtos
        </h1>
        <form action="adicionar_produtos.php" method="post">

            <div>
                <label for="nome">nome do produto</label>
                <input type="text" name ="nome" id ="nome">
            </div>
            <div>
                <label for="valor">valor do produto</label>
                <input type="number" name ="valor" id ="valor">
            </div>
            <div>
                <label for="quantidade">quantidade do produto</label>
                <input type="number" name ="quantidade" id ="quantidade">
            </div>
            <div>
                  <button type="submit">Adiconar</button>
                  <button type="reset">Limpar</button>
            </div>
        </form>
    </main>
</body>
</html>