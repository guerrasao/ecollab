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
        <img src="img/banner7.jpg" alt="Banner 1" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-danger font-weight-bold">Título Banner 1</h1>
          <h4 class="text-white font-weight-bold"> Texto Banner 1 </h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner4.jpg" alt="Banner 2" class="img-fluid">
        <!-- exibe sempre, nos outros apenas quando md-->
        <div class="carousel-caption d-md-block">
          <h1 class="text-danger font-weight-bold">Título Banner 2</h1>
          <h4 class="text-white font-weight-bold"> Texto Banner 2 </h4>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner6.jpg" alt="Banner 3" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="text-danger font-weight-bold">Título Banner 3</h1>
          <p class="text-info font-weight-bold"> Texto Banner 3 </p>
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
        <div class="col-md-6">
          <h1 class="text-center"> projeto </h1>
          <p class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
        <div class="col-md-6">
          <img src="img/note.jpg" class="img-fluid rounded">
        </div>
      </div>
    </div>
</section>

<?php
    $file = $path . 'rodape.php';
    include_once ($file);
?>
