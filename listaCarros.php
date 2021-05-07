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
      <div class="jumbotron">
         <h1 class="display-4">TurbCar</h1>
         <p class="lead">O melhor lugar para achar seu carro novo</p>
         <br>
         <p class="lead">Lista de Carros</p>
         <hr class="my-4">
         <?php 
                lista();
         
          ?>      
      
   </body>
</html>
 
  


