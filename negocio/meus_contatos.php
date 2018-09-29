<?php
    include("../banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $contatos= buscaContatos($usuario);
    if($contatos!=NULL){
        while($dados= mysqli_fetch_array($contatos)){
            $nome=$dados["nome"];
            $idUsuario=$dados["id"];
            //carrega contatos
        }
    }else{
        echo "Você não possui contatos.";
    }
    
