<?php

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$dtnasc=$_POST["dtNasc"];
$grauinst=$_POST["grauInstrucao"];
$cidade=$_POST["cidade"];
$email=$_POST["email"];
$foto=$_POST["foto"];
$user=$_POST["usuario"];
$senha=$_POST["senha"];

include("../banco/usuario.php");
$teste=cadastra($nome, $sobrenome, $dtnasc, $grauinst, $cidade, $email, $foto, $user, $senha);
if($teste==1){
    echo "Usuario já existe!";
}else if($teste==2){
    echo "Email já existe!";
}else{
    echo "Cadastro realizado com sucesso!";
}


