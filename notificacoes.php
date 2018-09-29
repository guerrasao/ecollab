<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho_usuario_logado.php';
    include_once($file);
?>
<section class="container p-3">
    <div class="form-group">
        <h4 style="text-align: center"><b>Minhas solicitações de Collab</b></h4>
    </div>
    <form class="form-row pb-4 align-content-md-between ml-1" action="negocio/aceita_collab.php" method="post">
        <input type="text" class="form-control col-md-9" id="pesquisa" name="pesquisa" placeholder="Interesse">
        <button type="submit" name="submit" class="btn btn-primary  mr-4 ml-4 pr-4 pl-4  col-md-2">Pesquisar</button>
    </form>

<?php
    include("banco/usuario.php");
    session_start();
    $usuario=$_SESSION["usuario"];
    $idsNotificacoes=buscaIdNotificacoes($usuario);
    if($idsNotificacoes!=NULL){
        foreach ($idsNotificacoes as $id) {
            $dados=buscaNomeNotificacao($id);
            $id; //id da notificacão guardar infomação
            $nome=$dados["nome"];
            $idContato=$dados["id"];
            //echo "ID NOTIFICAÇÃO: $id | NOME DO CONTATO: $nome | ID CONTATO: $idContato <br><br>";
            $dados= buscaInfoUsuario($idContato);
            $ensinar= buscaQuerEnsinar($idContato);
            $aprender= buscaQuerAprender($idContato);
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
            
?>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <button type="submit" name="submit" class="btn btn-primary pr-4 pl-4">Aceitar collab</button>
        </div>
    </form>
<?php
                        
        }
    }else{
        echo '<div class="alert alert-danger" role="alert">
                Nenhuma notificação encontrada!
              </div>';
    }
?>

</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
