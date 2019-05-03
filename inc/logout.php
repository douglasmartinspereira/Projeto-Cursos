<?php
    session_start();
    // destruindo a sessão de usuário
    session_destroy();
    // redirecionando o usuário para o login.php
    header("Location: ../login.php");

?>