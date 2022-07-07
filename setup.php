<?php
include 'configurar.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Criacao de BD e Tabelas</title>
</head>
<body>
    
</body>
</html>


<?php

    // Conexao com o MySql
    $conexao = mysqli_connect("localhost","root","") or die ("<p>Falha na Conexao com o MySql</p>");


    // Deletar o Banco de Dados bd_freelers
    $deletar_bd = mysqli_query($conexao,"DROP DATABASE bd_freelers");


    // Criar o Banco de Dados bd_freelers
    $criar_bd = mysqli_query($conexao,"CREATE DATABASE bd_freelers");
    echo "<p>Banco de Dados bd_freelers Criado";


    // Selecionar o Banco de Dados bd_freelers
    mysqli_select_db($conexao,"bd_freelers") or die ("<p>Falha na selecao do Banco de Dados bd_freelers</p>");


    // --- Criar a tabela cliente
    mysqli_query($conexao,"CREATE TABLE conta_freela (id INT (05) NOT NULL,
    nome VARCHAR (050),
    idade INT (003),
    email VARCHAR (040),
    senha VARCHAR (025),
    trabalho VARCHAR (255),
    descricao VARCHAR (255),
    PRIMARY KEY(id),
    UNIQUE(id))
    COLLATE='utf8_general_ci'
    ENGINE=InnoDB")
    or die ("<br>Falha na criação da tabela cliente".mysql_error()."</p>");
    echo "<br>Tabela cliente Criada";

?>