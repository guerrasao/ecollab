<?php

include("../banco/usuario.php");

session_start();
$usuario=$_SESSION["usuario"];
$idEnsina=$_POST["idEnsina"];
cadastraNotificacao($usuario, $idEnsina);

header("location:../quero_aprender.php");
    