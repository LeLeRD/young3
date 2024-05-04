<?php
include('../conections/conections.php');
if (isset($_GET['id']))
{
    $id = $_GET['id'];

    $codigo_sql = "SELECT nome, valor,quantidade FROM produtos WHERE id='$id'";
    $resultado = $mysqli->query($codigo_sql);
    if($resultado->num_rows == 1)
    {
       $Linha=$resultado->fetch_array();
       $nome = $Linha['nome'];
       $valor =$Linha['valor'];
       $quantidade = $Linha['quantidade'];
    }
   else
   {
    echo 'produto nao encontrado';
   }

}

if ($_SERVER['REQUEST_METHOD']=='POST')
{
   $id = $_POST['id'];
   $nome = $_POST['nome'];
   $valor= $_POST['valor'];
   $quantidade= $_POST['quantidade'];
 $sql = "UPDATE produtos SET nome =' $nome',valor = '$valor', quantidade = '$quantidade' WHERE id ='$id'";

 if ($mysqli->query($sql)==TRUE)
 {
   header('location:Listar_produtos.php');
   exit();
 }
 else
 {
   echo 'erro ao atualizar, sou um fracasso'.$mysqli->error;
 }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar_produto</title>
</head>
<body>
   <div>
      <h1>Editar_produto</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
         <input type="hidden" name="id" value="<?php echo $id;?>">
         <div>
            <label for="nome">nome do produto</label>
            <input type="text" name = "nome" id="nome"value="<?php echo $nome;?>"required>
         </div>
         <div>
            <label for="valor">valor do produto</label>
            <input type="text" name = "valor" id="valor"value="<?php echo $valor;?>"required>
         </div>
         <div>
            <label for="quantidade">quantidade do produto</label>
            <input type="number" name = "quantidade" id="quantidade"value="<?php echo $quantidade;?>"required>
         </div>
         <div>
            <button type="submit">Atualizar</button>
         </div>
      </form>

   </div>
</body>
</html>