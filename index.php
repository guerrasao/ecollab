<?php
    //Cabecalho usuario não logado
    //Pegando o caminho absoluto à esse arquivo.
    $path = $_SERVER['DOCUMENT_ROOT'] . '/ecollab/cabecalho/';
    $file = $path . 'cabecalho.php';
    include_once($file);
?>

<section id="banner" class="carousel slide" data-ride="carousel">
    <!-- imagens -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1.jpg" alt="Banner 1" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner2.jpg" alt="Banner 2" class="img-fluid">
        <!-- exibe sempre, nos outros apenas quando md-->
        <div class="carousel-caption d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner1.jpg" alt="Banner 3" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>  
    <!-- setas de next e prev -->
    <a class="carousel-control-prev" href="#banner" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#banner" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>  
</section>

<section>
    <div class="container">
    <div class="row jumbotron bg-white align-items-center">
        <div class="col-md-7 mr-5">
            <h1 class="text-center"> O QUE É O <b>E-COLLAB</b>? </h1>
          <p class="text-justify">O objetivo principal do sistema é conectar pessoas que possuem interesses de aprender e ensinar.
              O foco é desenvolver um ambiente de aprendizagem colaborativa, onde a moeda de troca é o conhecimento, realizando assim uma democratização do conhecimento entre os usuários. Outro objetivo importante é a união de pessoas que possuem os mesmo interesses de aprendizagem, auxiliando no processo de formação de grupos de estudos e de pesquisa, podendo unir não somente no âmbito virtual, mas como pessoalmente.
 </p>
        </div>
        <div class="col-md-4">
            <img src="img/logotransparente.png" class="img-fluid rounded" >
        </div>
      </div>
    </div>
</section>

<section>
    <div class="container">
    <div class="row jumbotron bg-white align-items-center">
        <div class="col-md-7 mr-5">
            <h1 class="text-center"> QUEM DESENVOLVEU? </h1>
          <p class="text-justify">O sistema foi desenvolvido por Daniel Brenner Seitenfus, Elivelton Capra e Patrick Guerra, durante o evento Hackathon promovido pelo IF Farroupilha - Campus Frederico Westphalen.
 </p>
        </div>
        <div class="col-md-4">
            <img src="img/desenvolvedores.jpg" class="img-fluid rounded" >
        </div>
      </div>
    </div>
</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
