<?php
    //buscar dados 

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $senha = $_GET['senha'];
    $email = $_GET['email'];
    $id = $_GET['id'];

    echo "<h2> .: Dados Recebidos :. </h2><hr>";
    echo "<b>Nome:</b> $nome <br>";
    echo "<b>Idade:</b> $idade <br>";
    echo "<b>Senha:</b> $senha <br>";
    echo "<b>E-Mail:</b> $email <br>";
    echo "<b>Id:</b> $id <br><hr>";
?>