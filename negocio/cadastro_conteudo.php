<?php

include("../banco/usuario.php");
$ids=$_POST["checkbox"];
for($i=0;$i<count($ids);$i++){
    $conteudos=solicitconteudos($ids[$i]);
    //Conteudos é um vetor de conteudos
    //Preencher as tabelhas com os conteudos
}
