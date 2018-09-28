<?php
    include_once 'usuario.php';
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
    
    function buscaCadastro()
