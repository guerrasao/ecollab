<?php

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$dtnasc=$_POST["dtNasc"];
$grauinst=$_POST["grauInstrucao"];
$cidade=$_POST["cidade"];
$email=$_POST["email"];
$user=$_POST["usuario"];
$senha=$_POST["senha"];
$genero=$_POST["genero"];

$extensao = pathinfo($_FILES['foto']['name']);
$extensao = ".".$extensao['extension'];
$imagem = time().uniqid(md5(1)).$extensao;
$target_dir = "../images_profile/";
$target_file = $target_dir . basename($imagem);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["foto"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["foto"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

include_once("../banco/usuario.php");
$teste=cadastra($nome, $sobrenome, $dtnasc, $grauinst, $cidade, $email, $imagem, $user, $senha,0, $genero);
        
if($teste==1){
    echo "Usuario já existe!";
}else if($teste==2){
    echo "Email já existe!";
}else{
    echo "Cadastro realizado com sucesso!";
}


