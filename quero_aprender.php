<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>
<section class="container p-3">
    <div class="form-group">
        <h4 style="text-align: center"><b>Você quer aprender? Cadastre interesses para encontrar pessoas!</b></h4>
        <a class="btn btn-primary col-md-12 p-3 ml-1 mt-4 mb-4" href="cadastra_aprender_area.php">Cadastrar Interesse</a>
    </div>
    <form class="form-row pb-4 align-content-md-between ml-1" action="" method="post">
        <input type="text" class="form-control col-md-9" id="pesquisa" name="pesquisa" placeholder="Interesse">
        <button type="submit" name="submit" class="btn btn-primary  mr-4 ml-4 pr-4 pl-4  col-md-2">Pesquisar</button>
    </form>
    <h3 style="text-align: center"><b>Pessoas para um Collab:</b></h3>

<?php
    include("banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $ids=buscaPorInteresseAprender($usuario);

    if($ids!=NULL){
        for($i=0;$i<count($ids);$i++){
            $dados= buscaInfoUsuario($ids[$i]);
            $ensinar= buscaQuerEnsinar($dados["id"]);
            $aprender= buscaQuerAprender($dados["id"]);
?>
    <form class="container-fluid row jumbotron m-1 mt-3 align-items-center pb-2 pt-4 pr-4" method="post" action="negocio/demonstrar_interesse.php">
        <div class="col-md-1">
            <img src="images_profile/<?php echo $dados["foto"]; ?>" class="img-fluid" alt="Foto do usuário">
            <input type="hidden" name="idEnsina" value="<?php echo $dados["id"]; ?>">
        </div>
        <div class="col-md-2">
            <p><?php echo $dados["nome"]; ?></p>
        </div>    
        <div class="col-md-3">
            <table class="table bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Pode Ensinar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
<?php
            //html - nome;
            if($ensinar!=NULL){
                foreach ($ensinar as $ensinar['nome'] => $value) {
                    echo "<tr><td>".$value."</td></tr>";
                }
            }else{
                echo "<tr><td>Não quer ensinar nada.</td></tr>";
            }
            
?>
                    
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <table class="table bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Quer Aprender</th>
                    </tr>
                </thead>
                <tbody>
                    
<?php
            if($aprender!=NULL){
                foreach($aprender as $aprender['nome'] => $value) {
                    echo "<tr><td>".$value."</td></tr>";
                    //html - conteudo que quer aprender;
                }
            }else{
                echo "<tr><td>Não quer aprender nada.</td></tr>";
            }
            $jaDemonstrou;
            if(temNotificacaoUsuario($_SESSION['usuario'], $ids[$i])){
                $jaDemonstrou="Retirar interesse";
            }else{
                $jaDemonstrou="Demonstrar interesse";
            }
?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4"><?php echo $jaDemonstrou?></button>
        </div>
    </form>
<?php
                        
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">
                Nenhum elemento similar!
              </div>';
    }
?>

</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
