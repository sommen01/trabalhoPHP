<?php
require_once 'funcoes.php';
include_once "menu.php";
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Inicio</title>
   </head>
   <body>
      <!-- MAIN PAGE -->
      <div class="text-center">
         <div class="cover-container d-flex h-100 p-3 flex-column text-light" style="background: url('/trabalhoPhp/assets/img/background.jpg') no-repeat center center/cover;">
            <p class="mb-auto"></p>
            <div style="background-image: linear-gradient(to right, rgba(255,0,0,0), #000028);">
               <h1 class="cover-heading display-1 font-weight-bold">TurbCar</h1>
               <p class="lead">Se você busca fazer um bom negocio com preço baixo e qualidade, aqui é o melhor lugar para achar seu carro novo.</p>
               <a class="btn btn-primary btn-lg" href="listaCarros.php" role="button">VEJA NOSSO CATÁLOGO</a>
            </div>
            <p class="mt-auto"></p>
         </div>
      </div>
      <!-- JUMBOTRON -->
      <div class="jumbotron bg-dark text-light m-0" style="background: linear-gradient(#000028, #280000);">
         <div class="container text-center">
            <h1 class="display-4 font-weight-bold">COMPRE CONOSCO</h1>
            <p class="lead">Nossa missão é a satisafação do cliente, oferecendo serviço de qualidade com preço baixo.</p>
            <a class="btn btn-secondary btn-lg" href="#">SOBRE NÓS</a>
         </div>
      </div>
      <!-- CAROUSEL -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
         <!-- slides -->
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="/trabalhoPhp/assets/img/camaro.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item ">
               <img src="/trabalhoPhp/assets/img/mustanggt.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item ">
               <img src="/trabalhoPhp/assets/img/background.jpg" class="d-block w-100" >
            </div>
         </div>
         <!-- control -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Left</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Right</span>
         </a>
      </div>

      <?php include 'listaCarros.php'; ?>
      <?php include 'addCarro.php'; ?>
      <?php include 'contato.php'; ?>

      <?php include_once 'footer.php'; ?>

   </body>
</html>

<?php
if (isset($_POST["enviar"])) {
 
  $valor = $_POST["valor"];
  $cad  = raio($valor);
 
  
}


?>
