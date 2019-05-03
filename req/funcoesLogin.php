<?php
   

    // // cria a função para cadastrar o usuario no json
    function cadastrarUsuario($usuario) {
        try {
            global $conexao;
            //adiciona usuario
            $query = $conexao->prepare("INSERT INTO usuarios(nome, email, senha, tipo_usuario_fk) VALUES(:nome, :email, :senha, 3)");

            $query->execute([
                ":nome"=> $usuario["nome"],
                ":email"=>$usuario["email"],
                ":senha"=>$usuario["senha"]
            ]);
    
            $usuario= $query->fetchALL(PDO::FETCH_ASSOC);
            
            $conexao = null;
            //var_dump($cursos);
        } catch ( PDOException $Exception) {
            echo $Exception->getMessage();
        }
        return true;
    }
    //      // pegando a variavel para dentro da função
    //     global $nomeArquivo;
    //     //pegando o conteudo do arquivo usuarios.json
    //     $usuariosJson = file_get_contents($nomeArquivo);
    //     // Pegando o json e transformando em array associativo
    //     $arrayUsuarios = json_decode($usuariosJson, true);  // sem o true não vira Array 
    //     // adicionando um novo usuário para o array associativo
    //     array_push($arrayUsuarios["usuarios"], $usuario);
    //     // transformando a array em json novamente
    //     $usuariosJson = json_encode($arrayUsuarios);
    //     // colocando o json de volta para o arquivo usuarios.json
    //     $cadastrou = file_put_contents($nomeArquivo, $usuariosJson); // o file_put_contents retorna true ou false, funcoes tem retorno
    //     //retornar a resposta
    //     return $cadastrou;
    // }


    // cria função para logar o usuario

    function logarUsuario($email, $senha){
        try{
            global $conexao;

            $query = $conexao->prepare("SELECT * FROM usuarios WHERE  email = :email");

            $query->execute([   
                ":email"=>$email  
            ]);

            $usuario = $query->fetch(PDO::FETCH_ASSOC);

            if($usuario["email"] == $email && password_verify($senha,$usuario["senha"])){
                $infologado = [
                    "nomeUsuario" => $usuario["nome"],
                    "tipoUsuario" => $usuario["tipo_usuario_fk"]

                ];

                var_dump($infologado);
            }


        }catch (PDOException $Exception){
            echo $Exception->getMessage();


        }
        return $infologado;
    }





?>