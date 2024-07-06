<?php
include('../../conections/conections.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql= "SELECT * FROM conteudo WHERE id='$id'";
    $resultado = $mysqli->query($sql);
    if($resultado->num_rows == 1)
    {
        $Linha=$resultado->fetch_array();
        $nome = $Linha['titulo'];
        $imagem = $Linha['img'];
        $texto = $Linha['texto'];
        $album1 = $Linha['album 1'];
        $album2 = $Linha['album 2'];
        $album3 = $Linha['album 3'];
        $nome_album1 = $Linha['nome_album1'];
        $nome_album2 = $Linha['nome_album2'];
        $nome_album3 = $Linha['nome_album3'];


    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artista</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <nav class="nome">
            <h1><?php echo $nome ?></h1>
        </nav>
    </div>
    <div class="imagem">
        <img src="../imagens/<?php echo $nome ?>/<?php echo $imagem ?>" alt="artista">
    </div>
    <div class="bio">
        <p>
            <?php echo $texto ?>
        </p>
    </div>
    <div class="mscs">
        <h1>Top 3 Álbuns:</h1>
        <div data-titlte="Vida cara">
            <h1><?php echo $nome_album1 ?></h1>
            <img src="../imagens/<?php echo $nome?>/<?php echo $album1 ?>" alt="">
        </div>
        <div>
            <h1><?php echo $nome_album2 ?></h1>
            <img src="../imagens/<?php echo $nome?>/<?php echo $album2 ?>" alt="">
        </div>
        <div>
            <h1><?php echo $nome_album3 ?></h1>
            <img src="../imagens/<?php echo $nome?>/<?php echo $album3 ?>" alt="">
        </div>
    </div>
    <button class="back-button" onclick="goBack()">Voltar</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <style>
        .back-button {
            padding: 10px 20px;
            font-size: 25px;
            background-color:darkred;
            color: black;
            border: none;
            cursor: pointer;
            border-radius: 5px
        }
        
        .back-button:hover {
            background-color: #45a049;
        }
    </style>
</body>
</html>