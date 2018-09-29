<?php

include("../banco/usuario.php");
$matrizAreas=SolicitAreas();

for($i=0; $i<sizeof($matrizAreas);$i++){
    $id=$matrizAreas[$i]["id"];
    $nome=$matrizAreas[$i]["nome"];
    $foto=$matrizAreas[$i]["foto"];
    //COLOCAR NA PARTE GRÁFICA
}
