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
    
    function buscaCadastro($usuario){
        $con= abrirConexao();
        $result= mysqli_query($con, "SELECT * FROM usuario WHERE usuario='$usuario'");
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
    
    function buscaPorInteresseAprender($usuario){ //retorna uusários que ensinam o que se quer aprender
        $con=abrirConexao();
        $result=mysqli_query($con, "SELECT uc.* FROM usuario u, usuario_conteudo uc WHERE u.usuario=$usuario and uc.aprender=1");
        $rows=mysqli_affected_rows($result);
        $idUsuarios;
        $indiceIds=0;
        if($rows>0){
           $dados=mysqli_fetch_array($result); //CONTEÚDOS QUE ELE QUER APRENDER
           for($i=0; $i<rows; $i++){
               $idConteudo=$dados[$i]["conteudo_id"];
               $result2= mysqli_query($con, "SELECT u.id FROM usuario u, usuario_conteudo uc WHERE uc.ensinar=1 and uc.conteudo_id=$idConteudo");
               $quantidadeDeIds= mysqli_num_rows($result2);
               if($quantidadeDeIds>0){
                   $ids=mysqli_fetch_array($result2);
                   for($j=0; $j<$quantidadeDeIds; $j++){
                       $idUsuarios[$indiceIds++]=$ids[$j];//ver se precisa da coluna "id"
                   }
               }
           }
           
           return $idUsuarios;
        }else{
            return NULL; //deu errado
        }
    }
    
    function buscaInfoInteresseAprender($id){
        
    }
    
    

