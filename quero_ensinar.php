<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>

<form class="container col-md-9" method="post" action="cadastro_ensinar_conteudo.php">
    <h1 class="p-3 mb-4">Quais áreas você tem interesse em ensinar?</h1>
<?php
include("banco/usuario.php");
$matrizAreas= buscaCategorias();
$i=0;
while($dados= mysqli_fetch_array($matrizAreas)){
    $id=$dados["id"];
    $nome=$dados["nome"];
    $foto=$dados["foto"];
   
    if($i == 0){
        echo  '<div class="display-flex m-1">';
    }
        echo '
            <div class="card box">
                <div class="card-body d-flex flex-column">
                    <input type="checkbox" class="m-1" name="areas[]" value="'.$id.'">
                    <img class="img-thumbnail m-1" src="img/'.$foto.'" alt="Card image cap">
                    <h5 class="card-title m-1">'.mb_convert_encoding($nome, "UTF-8", "ISO-8859-1").'</h5>
                </div>
            </div>
        ';
        ++$i;
    if($i % 3 == 0 and $i>0){
        echo '</div>';
        echo  '<div class="display-flex m-1">';
    }
    //COLOCAR NA PARTE GRÁFICA 
    
}
echo '</div>';
?>
       
    <div class="d-flex justify-content-end mt-4 mb-4">
        <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4">Prosseguir</button>
    </div>
</form>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
