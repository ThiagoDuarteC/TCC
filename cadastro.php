<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelers</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    
    <header>
        <div class="logo"></div><!--logo-->
    </header>

    <main>
        <div class="container">
            <form method="POST" action="main_page.php">
                <div class="half left">
                    <p>Nome:</p>
                    <input type="text" name="nome" required>
                </div>
                <div class="half">
                    <p>Idade:</p>
                    <input type="number" name="idade" required>
                </div>
                <div class="half left">
                    <p>Email:</p>
                    <input type="email" name="email" required>
                </div>
                <div class="half">
                    <p>Senha:</p>
                    <input type="password" name="senha" required>
                </div>

                <div class="clear"></div><!--clear-->

                <div class="full">
                    <p>Trabalho:</p>
                    <input type="text" name="trabalho" required> 
                </div>
                <div class="full desc">
                    <p>Descrição:</p>
                    <textarea name="descricao" required></textarea>
                </div>
                <a href="main_page.php">Entrar no Site</a>
                <div class="clear"></div>
                <button type="submit" class="button" name="enviar">Criar</button>
            </form>
        </div><!--container-->
    </main>

</body>
</html>