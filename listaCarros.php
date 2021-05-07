<?php
require_once 'funcoes.php';
include_once "menu.php";
?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Lista Carros</title>
   </head>
   <body>
      <!-- JUMBOTRON -->
      <div class="jumbotron bg-dark text-light m-0" style="background: linear-gradient(#000028, #280000);">
         <div class="container text-center">
            <h1 class="display-4 font-weight-bold">CATÁLOGO DE CARROS</h1>
            <p class="lead">Nossa missão é a satisafação do cliente, oferecendo serviço de qualidade com preço baixo.</p>
            <a class="btn btn-secondary btn-lg" href="addCarro.php">ADICIONAR UM CARRO</a>
         </div>
      </div>

      <!-- CAR CARDS -->
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="row p-3 my-3">    
                  <?php lista(); ?>

               </div>
            
            </div>

         </div>

      </div>

   </body>
</html>
 
  


