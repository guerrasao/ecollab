<?php
    session_start();
    $usuario=$_SESSION["usuario"];
    $contatos= buscaContatos($usuario);
    while($dados= mysqli_fetch_array($contatos)){
        $nome=$dados["nome"];
        $idUsuario=$dados["id"];
        //carrega contatos
    }
