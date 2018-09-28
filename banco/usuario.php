<?php
    include_once 'usuario.php';
    function login($usuario, $senha){
        $con= abrirConexao();
        $result= mysqli_query($con,"SELECT senha FROM usuario WHERE usuario='$usuario'");
        if(mysqli_num_rows($result)>0){
            $dados= mysqli_fetch_array($result);
            if($dados["usuario"]===$usuario){
                if($dados["senha"]===$senha){
                    return 0; //deu certo;
                }else{
                    return 2; //senha errada
                }
            }else{
                return 1; //usuario não existe
            }
        }
    }

    function cadastra($nome, $sobrenome, $dtNasc, $grauInstrucao, $cidade, $email, $foto, $usuario, $senha, $pontuacao){
        $con=abrirConexao();
        $result = mysqli_query($con,"SELECT * FROM usuario WHERE usuario='$usuario' or email='$email'");
        if(mysqli_num_rows($result)>0){
            $dados= mysqli_fetch_array($result);
            if($dados["usuario"]===$usuario){
                return 1; //"já existe esse usuário"
            }else{
                return 2; //"este email já existe"
            }
        }else{
            mysqli_query($con,"INSERT INTO usuario(nome, sobrenome, dtNasc, grauInstrucao, cidade, email, foto, usuario, senha, pontuacao) 
                VALUES ('$nome', '$sobrenome', '$dtNasc', '$grauInstrucao', '$cidade', '$email', '$foto', '$usuario', '$senha', '$pontuacao')");
            return 0; //deu certo
        }
    }
    
    function buscaCadastro($id){
        $con= abrirConexao();
        $result= mysqli_query($con, "SELECT * FROM usuario WHERE id=$id");
        if(mysqli_num_rows($result)>0){
            $dados= mysqli_fetch_array($result);
            return $dados; //retorna array com todos os dados do usuário. FORMA DE ACESSO:  $dados["NOME DO CAMPO"];
        }else{
            return NULL; //caso não encontre
        }
    }
    
    function cadastraInteresse($ensinar, $aprender, $idConteudo, $idUsuario){ //1 para ensinar 0 para aprender ou ao contrário
        $con=abrirConexao();
        $result=mysqli_query($con, "INSERT INTO usuario_conteudo(ensinar, aprender, conteudo_id, usuario_id) VALUES ($ensinar, $aprender, $idConteudo, $idUsuario)");
        if(mysqli_affected_rows($result)>0){
            return true; //deu certo
        }else{
            return false; //deu errado
        }
    }
    
    

