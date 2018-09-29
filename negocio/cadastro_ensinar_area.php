<?php

include("../banco/usuario.php");
$categorias=buscaCategorias();
for($i=0;$i<count($categorias); $i++){
    $id=$matrizAreas[$i]["id"];
    $nome=$matrizAreas[$i]["nome"];
    $foto=$matrizAreas[$i]["foto"];
    //
}
