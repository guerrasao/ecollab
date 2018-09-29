<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>

<section class="container p-3">
    <div class="form-group">
        <a class="btn btn-primary col-md-12 p-4 mt-4 mb-4" href="cadastro_aprender_are.php">Cadastrar Interesse</a>
    </div>
    <form class="form-row pb-4 align-content-md-between" action="" method="post">
        <input type="text" class="form-control col-md-9" id="pesquisa" name="pesquisa" placeholder="Interesse">
        <button type="submit" name="submit" class="btn btn-primary  mr-4 ml-4 pr-4 pl-4  col-md-2">Pesquisar</button>
    </form>
    <div class="container-fluid form-row jumbotron   align-items-center pr-5">
        <div class="container-fluid form-row col-md-3">
            <div class="col-md-6">
                <img src="..." class="img-fluid" alt="Foto do usuário">
            </div>
            <div class="col-md-6">
                <p>Teste</p>
            </div>
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
            
        </div>
        <div class="col-md-3">
            <a class="btn btn-primary col-md-11 " href="demonstrar_interesse.php">Demonstrar Interesse</a>
        </div>
    </div>
</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
