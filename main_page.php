<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelers</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"></div><!--logo-->
            <div class="clear"></div><!--clear-->
            <h1>Encontre o profissional <br> certo para você!</h1>
            <div class="icone"></div><!--icone-->
        </div><!--container-->
        <div class="clear"></div><!--clear-->
    </header>

    <?php

    if (isset($_POST['enviar'])) {

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $trabalho = $_POST['trabalho'];
        $descricao = $_POST['descricao'];

        $mysqli = new mysqli("localhost","root","","bd_freelers");

        $sql = "INSERT INTO `conta_freela` (`nome`, `idade`, `email`, `senha`, `trabalho`, `descricao`) VALUES ('" . $nome . "', '" . $idade . "', '" . $email . "', '" . $senha . "', '" . $trabalho . "', '" . $descricao . "')";

        if ($mysqli->query($sql)) {}        
        
    }

        $mysqli = new mysqli("localhost", "root", "", "bd_freelers");
        $sql = "SELECT * FROM conta_freela";
        $rs_dados = $mysqli->query($sql);
        while ($info = $rs_dados->fetch_assoc()) {         
        ?>

          <div class="container">
            <div class="row">
              <!-- Single Advisor-->
              <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                  <!-- Team Thumb-->
                  <div class="advisor_thumb"><img src="https://api.ejcomp.com.br/members/1586969992913-perfilsemfoto.jpg">
                    <!-- Social Info-->
                    <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                  </div>
                  <!-- Team Details-->
                  <div class="single_advisor_details_info">
                    <?php
                    echo '<form method="POST" action="perfil.php">';
                    echo '<h6>' . $info['nome'] . '</h6>';
                    echo '<p class="designation">' . $info['trabalho'] . '</p>';
                    echo '<input type="hidden" name="id" value="'. $info['id'] .'">';
                    echo '<button type="submit" class="button" name="enviar">Ver Mais</button>';
                    echo '</form>';
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!--container-->

        <?php
        }

    ?>
    
</body>
</html>