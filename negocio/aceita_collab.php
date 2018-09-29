<?php
    include("../banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $idUsuarioSolicita=$_POST["idUsuarioSolicita"];   
    $idNotificacao=$_POST["idNotificacao"];
    cadastraContato($usuario, $idUsuarioSolicita);
    removeNotificacao($idNotificacao);

