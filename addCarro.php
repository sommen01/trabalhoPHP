<?php
require_once 'funcoes.php';
include_once "menu.php";
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inicio</title>

    <style rel="stylesheet" type="text/css">
    .file {
        visibility: hidden;
        position: absolute;
    }
    </style>
</head>

<body>
   
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-auto border">
            <h1 class="display-3 p-3 my-3 bg-dark text-white text-center">Adicionar Carro</h1>
            <!-- CAR FORM -->
            <form class="custom-form" action="executaFormAddCarro.php" method="post" id="formcad" enctype="multipart/form-data" name="formcad">
               
               <div class="row">

                  <div class="col-6">

                     <div class="form-group">
                        <label class="col-form-label">Nome Carro</label>
                        <input class="form-control" type="text" name="nome"required>
                        <label class="col-form-label">Cor</label>
                        <input class="form-control" type="color" name="color"required>
                        <label class="col-form-label">Lugares</label>
                        <input class="form-control" type="number" name="lugares" min="1" required>
                        <label class="col-form-label">Preco</label>
                        <input class="form-control" type="number" min="0" step="0.01" name="valor"required>
                        <label class="col-form-label">Kilometragem</label>
                        <input class="form-control" type="number" min="0" step="0.01" name="km"required>
                        <label class="col-form-label">Telefone</label>
                        <input class="form-control" type="tel" name="telefone" pattern="[0-9]{11,}" placeholder="67991234567" required>
                     </div>
                     <div class="form-row form-group ml-0">
                        <?php 
                           if(isset($_SESSION["error"])){
                              echo $_SESSION["error"];
                              unset($_SESSION["error"]);
                           }
                        ?>
                     </div>
                  </div>

                  <div class="col-6">
                     <div class="form-group">
                        <label class="col-form-label" >Email</label>
                        <input class="form-control" type="email" name="email" placeholder="name@example.com" required>
                        <label class="col-form-label">Data Fabricacao</label>
                        <input class="form-control" type="date" name="data"required>
                        <label class="col-form-label">Numero de portas</label>
                        <input class="form-control" type="number" name="portas" min="1"required>
                        <label class="col-form-label">Espaco do porta malas</label>
                        <input class="form-control" type="number" name="portaMalas" min="0" step="0.01"required>
                        
                        <label class="col-form-label">Imagem do Veiculo</label>
                        <div class="form-row">
                           <div class="col-sm-12" style="display: flex; flex-direction:row;">
                              <div id="msg"></div>
                              <input type="file" name="img" class="file" accept="image/*">
                              <div class="input-group">
                                 <input type="text" class="form-control" disabled placeholder="Enviar Imagem" id="file">
                              </div>
                              <div class="input-group-append">
                                 <button type="button" class="browse btn btn-primary">Pesquisar...</button>
                              </div>
                           </div>
                           <div class="ml-2 col-sm-6">
                              <img  id="preview" class="img-thumbnail">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <input type="submit" class="btn btn-primary mb-2 center-block btn-lg" name="enviar" value="enviar">

            </form>

         </div>

      </div>

   </div>

   <script  type="text/javascript">
      $(document).on("click", ".browse", function() {
      var file = $(this).parents().find(".file");
      file.trigger("click");
      });
      $('input[type="file"]').change(function(e) {
      var fileName = e.target.files[0].name;
      $("#file").val(fileName);

      var reader = new FileReader();
      reader.onload = function(e) {
         // get loaded data and render thumbnail.
         document.getElementById("preview").src = e.target.result;
      };
      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
      });
   </script>
</body>


</html>

