<?php
    include "inc/head.php";
    include "inc/header.php";
    require "inc/funcoes.php";

    //variaveis

    $nome = $_REQUEST["nomeCompleto"];
    $cpf = $_REQUEST["cpf"];
    $nroCartao = $_REQUEST["nroCartao"];
    $validade = $_REQUEST["validade"];
    $cvv = $_REQUEST["cvv"];
    $nomeCurso = $_REQUEST["nomeCurso"];
    $precoCurso = $_REQUEST["precoCurso"];

    validarCompra($nome, $cpf, $nroCartao, $validade, $cvv);

?>


    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>Compra realizada com Sucesso!</span>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nome Curso:</strong> <?=$nomeCurso; ?></li>
                        <li class="list-group-item"><strong>Preço :R$</strong><?=$precoCurso; ?></li>
                        <li class="list-group-item"><strong>Nome Completo:</strong> <?php echo $nome; ?></li>
                    </ul>
                    <div class="center">
                        <a href="index.php">Voltar para home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


