<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>

<section class="container p-3">
    <div class="form-group">
        <a class="btn btn-primary col-md-12 p-3 ml-1 mt-4 mb-4" href="cadastro_aprender_are.php">Cadastrar Interesse</a>
    </div>
    <form class="form-row pb-4 align-content-md-between ml-1" action="" method="post">
        <input type="text" class="form-control col-md-9" id="pesquisa" name="pesquisa" placeholder="Interesse">
        <button type="submit" name="submit" class="btn btn-primary  mr-4 ml-4 pr-4 pl-4  col-md-2">Pesquisar</button>
    </form>
    <div class="container-fluid row jumbotron m-1 mt-3 align-items-center pb-2 pt-4 pr-4">
        <div class="col-md-1">
            <img src="..." class="img-fluid" alt="Foto do usuário">
        </div>
        <div class="col-md-2">
            <p>Nome da pessoa</p>
        </div>
        <div class="col-md-6">
            <table class="table bg-white">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Pode Ensinar</th>
                  <th scope="col">Pode Aprender</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Matemática</td>
                  <td>Matemática</td>
                </tr>
                <tr>
                  <td>Matemática</td>
                  <td>Matemática</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <a class="btn btn-primary col-md-11 " href="demonstrar_interesse.php">Demonstrar Interesse</a>
        </div>
    </div>
    <div class="container-fluid row jumbotron m-1 mt-3 align-items-center pb-2 pt-4 pr-4">
        <div class="col-md-1">
            <img src="..." class="img-fluid" alt="Foto do usuário">
        </div>
        <div class="col-md-2">
            <p>Nome da pessoa</p>
        </div>
        <div class="col-md-6">
            <table class="table bg-white">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Pode Ensinar</th>
                  <th scope="col">Pode Aprender</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Matemática</td>
                  <td>Matemática</td>
                </tr>
                <tr>
                  <td>Matemática</td>
                  <td>Matemática</td>
                </tr>
              </tbody>
            </table>
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
