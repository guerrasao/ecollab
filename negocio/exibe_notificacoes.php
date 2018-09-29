<?php
    include("../banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $idsNotificacoes=buscaIdNotificacoes($usuario);
    if($idsNotificacoes!=NULL){
        foreach ($idsNotificacoes as $id) {
            $dados=buscaNomeNotificacao($id);
            $id; //id da notificacão guardar infomação
            $nome=$dados["nome"];
            $idContato=$dados["id"];
            echo "ID NOTIFICAÇÃO: $id | NOME DO CONTATO: $nome | ID CONTATO: <br>";
        }
    }else{
        echo "Você não possui notificações!";
    }
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

