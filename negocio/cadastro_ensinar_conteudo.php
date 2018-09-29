<?php

include("../banco/usuario.php");
$ids=$_POST["checkbox"];
for($i=0;$i<count($ids);$i++){
    $conteudos=SolicitConteudos($ids[$i])
    //Conteudos array de conteudos
    //Preencher tabelas com conteudos
}