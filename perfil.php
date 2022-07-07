<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelers</title>
    <link rel="stylesheet" href="css/style4.css">
</head>
<body>

<?php

    $mysqli = new mysqli("localhost","root","","bd_freelers");
    $id = $_POST['id'];

    $sql = "SELECT * FROM `conta_freela` WHERE `id`=" . $id;

    $rs_dados = $mysqli->query($sql);
    $info = $rs_dados->fetch_assoc();

?>
    
    
    
    <header>
        <div class="logo"></div><!--logo-->
    </header>

    <div class="container">
        <div class="clear"></div><!--clear-->
        <main>
            <h2><?php echo $info['nome']; ?></h2>
            <div class="contato">
                <p>Contato:</p>
                <p><?php echo $info['email']; ?></p>
            </div><!--contato-->
            <div class="descricao">
                <p><?php echo $info['descricao']; ?></p>
            </div><!--descricao-->
            <button type="submit" class="button"><a href="main_page.php">Voltar</a></button>
        </main>
        <div class="foto"><img src="Images/foto_perfil.jpg"></div><!--foto-->
    </div><!--container-->

</body>
</html>