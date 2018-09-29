<?php

include("../banco/usuario.php");
$matrizAreas= buscaCategorias();

for($i=0;$i<count($matrizAreas);$i++){
    $id=$matrizAreas[$i]["id"];
    $nome=$matrizAreas[$i]["nome"];
    $foto=$matrizAreas[$i]["foto"];
    //COLOCAR NA PARTE GRÁFICA 
}
