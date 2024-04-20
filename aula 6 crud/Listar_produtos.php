<?php
//ACESSAR BANCO DE DADOS
include('../conections/conections.php');

// QUERY PARA PEGAR INFORMAÇOES
$sql='SELECT * FROM  produtos';

//EXECUTAR QUERY
$resultado = $mysqli->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar_produtos</title>
</head>
<body>
    <main>
        <h1>
            estoque
        </h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Açoes</th>
            </tr>
            <?php
            if($resultado->num_rows>0)
            {
                while($Linha = $resultado -> fetch_assoc())
                {
                  echo'<tr>';
                   echo '<td>'.$Linha['Id']. '</td>';
                   echo '<td>'.$Linha['nome']. '</td>';
                   echo '<td>'.$Linha['valor']. '</td>';
                   echo '<td>'.$Linha['quantidade']. '</td>';
                   echo '<td><a href="editar_produtos.php?id='. $linha['Id'] .'">Editar</a> | <a href="deletar_produto.php?id='. $linha['Id'] .'">Deletar</a></td>';
                  echo '</tr>';
                }
            }
            ?>
        </table>
    </main>
</body>
</html>