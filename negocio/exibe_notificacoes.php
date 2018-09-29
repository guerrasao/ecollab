<?php
    include("../banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $idsNotificacoes=buscaIdNotificacoes($usuario);
    foreach ($idsNotificacoes as $id) {
        $nome=buscaNomeNotificacao($id);
        $id; //id da notificacão guardar infomação
        echo "ID NOTIFICAÇÃO: $id | NOME DO CONTATO: $nome <br>";
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

