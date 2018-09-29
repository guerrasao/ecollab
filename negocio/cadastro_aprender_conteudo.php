<?php

include("../banco/usuario.php");
$ids=$_POST["checkbox"];
for($i=0;$i<count($ids);$i++){
    $conteudos=buscaConteudos($ids[$i]);
    //Conteudos é um vetor de conteudos
    //Preencher as tabelas com os conteudos
}
