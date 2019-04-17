<?php

    require "req/funcoesLogin.php";
    include "inc/head.php";
// validando se o formulário foi enviado
    if($_REQUEST){
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $confirmarSenha = $_REQUEST["confirmarsenha"];
        // testes compara os dados cadastrados no banco de dados com os dados digitados
        // $cadastro = md5($senha);
        // $login = md5($senha);
        // echo $cadastro . "<br>";
        // echo $login;
        // exit;
        // Utilizando o hash
        // $hash = password_hash($senha, PASSWORD_DEFAULT);
        // echo $hash;
        // exit;
        // echo $nome . " " . $email . " " . $senha . " ". $confirmarSenha;
        // exit;
        // verifica se a senha é igual ao confirmar senha
        if($senha == $confirmarSenha){
            //criptografando a senha
            $senhaCrip = password_hash($senha, PASSWORD_DEFAULT);
            // criando um novo usuário
            $novousuario = [
                "nome"=> $nome,
                "email"=> $email,
                "senha"=> $senhaCrip,
            ];
            // cadastro meu usuario no json
            $cadastrou = cadastrarusuario($novousuario);
        } else {
            $erro = "senha incompativeis";
        }
            

    }

?>
<!-- dentro dessa Div criando formulário -->
    <div class="page-center">
        <h2>Cadastre-se</h2>
        <!-- verifica sea variavel cadatrou foi definida e se ela é true -->
        <?php if(isset($cadastrou) && $cadastrou): ?>
            <div class="alert alert-sucess"role="alert">
                <span>Usuario Cadastrado com sucesso!</span>
            </div>
            <!-- verifica se a variavel erro foi definida -->
        <?php elseif(isset($erro)) : ?>
            <div class="alert alert-danger" role= "alert">
                <?php echo $erro; ?>
            </div>
        <?php endif; ?>
        <form action="Cadastro.php" method="post" class=col-md-7>
            <div class="col-md-12">
                <label for="inputNome">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputNome">
            </div>
            <div class="col-md-12">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-12">
                <label for="inputSenha">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputSenha">
            </div>
            <div class="col-md-12">
                <label for="inputConfirmarSenha">Confirme sua  Senha</label>
                <input type="password" name="confirmarsenha" class="form-control" id="inputConfirmarSenha">
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Cadastrar</button>
                <a href="login.php" class="col-md-offset-9">Fazer Login!</a>
            </div>
        </form>

    </div>

<?php
    include "inc/footer.php";




?>