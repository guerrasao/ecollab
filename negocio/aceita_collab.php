<?php
    session_start();
    $usuario=$_SESSION["usuario"];
    $idUsuarioSolicita=$_POST["idUsuarioSolicita"];   
    $idNotificacao=$_SESSION["idNotificacao"];
    cadastraContato($usuario, $idUsuarioSolicita);
    removeNotificacao($idNotificacao);

