<?php

    $dsn = 'mysql:host=localhost;dbname=projeto_cursos;charset=utf8mb4;port:3306';
    $db_user = 'root';
    $db_pass = '';
    $conexao = new PDO($dsn,$db_user,$db_pass); 

    // CRIA UMA INSTÂNCIA DO OBJETO NA CLASSE PDO
    $conexao = new PDO($dsn,$db_user,$db_pass);   // RECEBE 3 INFORMAÇÕES: HOST, USUÁRIO E SENHA <== NESSA ORDEM

   // var_dump($conexao);

   $conexao->query('SELECT * FROM cursos');
?>