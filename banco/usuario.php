<?php
    include_once 'conexao.php';
    function login($usuario, $senha){
        $con= abrirConexao();
        $result= mysqli_query($con,"SELECT * FROM usuario WHERE usuario='$usuario'");
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

    function cadastra($nome, $sobrenome, $dtNasc, $grauInstrucao, $cidade, $email, $foto, $usuario, $senha, $pontuacao, $genero){
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
            mysqli_query($con,"INSERT INTO usuario(nome, sobrenome, dtNasc, grauInstrucao, cidade, email, foto, usuario, senha, pontuacao, genero) 
                VALUES ('$nome', '$sobrenome', '$dtNasc', '$grauInstrucao', '$cidade', '$email', '$foto', '$usuario', '$senha', $pontuacao, '$genero')");
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
    
    function retornaId($usuario){
        $result= mysqli_query($con, "SELECT id FROM usuario WHERE usuario='$usuario'");
        $dados= mysqli_fetch_array($result);
        $idUsuario=$dados["id"];
        return $idUsuario;
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
        $result=mysqli_query($con, "SELECT uc.* FROM usuario u, usuario_conteudo uc WHERE u.usuario='$usuario' and uc.aprender=1");
        $rows=mysqli_num_rows($result);
        $idUsuarios;
        $indiceIds=0;
        if($rows>0){
           while($dados=mysqli_fetch_array($result)){ //CONTEÚDOS QUE ELE QUER APRENDER
               $idConteudo=$dados["conteudo_id"];
               $result2= mysqli_query($con, "SELECT uc.usuario_id FROM usuario_conteudo uc WHERE uc.ensinar=1 and uc.conteudo_id=$idConteudo");
               $quantidadeDeIds= mysqli_num_rows($result2);
               if($quantidadeDeIds>0){
                   while($ids=mysqli_fetch_array($result2)){
                        $idUsuarios[$indiceIds++]=$ids["usuario_id"];//ver se precisa da coluna "id"
                    }
                }
           }
           return $idUsuarios; //Ids de usuários para aparecer na lista
           
        }
    }
    
    function buscaInfoUsuario($id){
        $con=abrirConexao();
        $result=mysqli_query($con,"SELECT u.* FROM usuario u WHERE u.id=$id");
        if(mysqli_num_rows($result)>0){
            $dados= mysqli_fetch_array($result);
            return $dados;
        }else{
            return NULL;
        }
    }
    
    function buscaQuerEnsinar($id){
        $con= abrirConexao();
        $result= mysqli_query($con, "SELECT c.* FROM usuario_conteudo uc, conteudo c WHERE uc.usuario_id=$id and uc.conteudo_id=c.id and uc.ensinar=1");
        if(mysqli_num_rows($result)>0){
            $nomes;
            $i=0;
            while($dados= mysqli_fetch_array($result)){
                $nomes[$i++]=$dados["nome"];
            }
            return $nomes;
        }else{
            return NULL;
        }
    }
    
    function buscaQuerAprender($id){
        $con= abrirConexao();
        $result= mysqli_query($con, "SELECT c.* FROM usuario_conteudo uc, conteudo c WHERE uc.usuario_id=$id and uc.conteudo_id=c.id and uc.aprender=1");
        if(mysqli_num_rows($result)>0){
            $nomes;
            $i=0;
            while($dados= mysqli_fetch_array($result)){
                $nomes[$i++]=$dados["nome"];
                echo "AAAAAA $nomes[$i]";
            }
            return $nomes;
        }else{
            return NULL;
        }
    }
    
    function temNotificacaoUsuario($usuarioConsultando, $idUsuario){
        $con=abrirConexao();
        $result= mysqli_query($con, "SELECT id FROM usuario WHERE usuario='$usuarioConsultando'");
        $dados= mysqli_fetch_array($result);
        $idUsuarioConsultando=$dados["id"];
        $result= mysqli_query($con, "SELECT id FROM notificacao_ensino WHERE usuario_id_aprende=$idUsuarioConsultando and usuario_id_ensina=$idUsuario");
        $dados= mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0){
            return true;
        }else{
            return false;
        }
    }
    
    function buscaCategorias(){
        $con=abrirConexao();
        $result=mysqli_query($con,"SELECT * FROM categoria");
        return $result;
    }
    
    function buscaInfoCategoria($idCategoria){
        $con=abrirConexao();
        $result=mysqli_query($con,"SELECT * FROM categoria WHERE id=$idCategoria");
        $dados= mysqli_fetch_array($result);
        return $dados["nome"];
    }

    function buscaConteudos($idCategoria){
        $con=abrirConexao();
        $result=mysqli_query($con,"SELECT * FROM conteudo WHERE categoria_id=$idCategoria");
        if(mysqli_num_rows($result)>0){
            return $result;
        }else{
            return NULL;
        }
    }
    
     function buscaConteudosId($id){
        $con=abrirConexao();
        $result=mysqli_query($con,"SELECT * FROM conteudo WHERE id=$id");
        if(mysqli_num_rows($result)>0){
            $dados= mysqli_fetch_array($result);
            return $dados;
        }else{
            return NULL;
        }
    }
    
    function cadastraNotificacao($usuarioAprende, $idEnsina){
        $con=abrirConexao();
        $result= mysqli_query($con, "SELECT id FROM usuario WHERE usuario='$usuarioAprende'");
        $dados= mysqli_fetch_array($result);
        $idAprende=$dados["id"];
        $result=mysqli_query($con,"INSERT INTO notificacao_ensino(usuario_id_ensina, usuario_id_aprende) VALUES ($idEnsina, $idAprende)");
    }
    
    function buscaIdNotificacoes($usuario){
        $con=abrirConexao();
        $result= mysqli_query($con, "SELECT ne.id FROM usuario u, notificacao_ensino ne WHERE u.usuario='$usuario' and ne.usuario_id_ensina=u.id");
        $notificacoes;
        $i=0;
        if(mysqli_num_rows($result)>0){
            while($dados=mysqli_fetch_array($result)){        
                $notificacoes[$i++]=$dados["id"];
            }
            return $notificacoes;
        }else{
            return NULL;
        }
    }
    
    function buscaNomeNotificacao($id){
        $con=abrirConexao();
        $result= mysqli_query($con, "SELECT u.nome FROM usuario u, notificacao_ensino ne WHERE ne.id=$id and ne.usuario_id=u.id");
        if(mysqli_num_rows($result)>0){
            $dados=mysqli_fetch_array($result);      
            $nome=$dados["nome"];
            return $nome;
        }else{
            return NULL;
        }
    }
    
    function cadastraContato($usuario, $idUsuarioSolicita){
        $con=abrirConexao();
        $result= mysqli_query($con, "SELECT id FROM usuario WHERE usuario='$usuario'");
        $dados= mysqli_fetch_array($result);
        $idUsuario=$dados["id"];
        $result= mysqli_query($con, "INSERT INTO contato_usuario(usuario_id, usuario_id_contato) VALUES ($idUsuario, $idUsuarioSolicita)");
    }
    
    function buscaContatos(){
        
    }
