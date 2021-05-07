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
<div class="row register-form">
   <div class="col-md-8 offset-md-2">
      <form class="custom-form" action="executaFormAddCarro.php" method="post" id="formcad" enctype="multipart/form-data" name="formcad">
         <h1>Adicionar Carro</h1>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Nome do Carro
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="text" name="nome"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-1 label-column"><label class="col-form-label" >
               Cor 
               </label>
            </div>
            <div class="col-sm-1 input-column"><input class="form-control" type="color" name="color"required></div>
            <div class="col-sm-1 col-sm-offset-1 label-column"><label class="col-form-label">
               Lugares 
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="number" name="lugares" min="1" required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Preco 
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="number" min="0" step="0.01" name="valor"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Kilometragem 
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="number" min="0" step="0.01" name="km"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Telefone 
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="tel" name="telefone" pattern="[0-9]{11,}" placeholder="67991234567" required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" >
               Email
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" placeholder="name@example.com" required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label" >
               Data Fabricacao
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="date" name="data"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Numero de portas 
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="number" name="portas" min="1"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-4 label-column"><label class="col-form-label">
               Espaco do porta malas
               </label>
            </div>
            <div class="col-sm-6 input-column"><input class="form-control" type="number" name="portaMalas" min="0" step="0.01"required></div>
         </div>
         <div class="form-row form-group">
            <div class="col-sm-10" style="display: flex; flex-direction:row;">
               <div id="msg"></div>
               <input type="file" name="img" class="file" accept="image/*">
               <div class="input-group my-3 mr-2">
                  <input type="text" class="form-control" disabled placeholder="Enviar Imagem" id="file">
               </div>
               <div class="input-group-append my-3">
                  <button type="button" class="browse btn btn-primary">Pesquisar...</button>
               </div>
            </div>
            <div class="col-sm-4">
               
            </div>
            <div class="col-sm-10">
               <img  id="preview" class="img-thumbnail">
            </div>
         </div> 
         <div class="form-row form-group">
            <?php 
               if(isset($_SESSION["error"])){
                  echo $_SESSION["error"];
                  unset($_SESSION["error"]);
               }
            ?>
         </div>
      <input type="submit" class="btn btn-primary mb-2 center-block btn-lg" name="enviar" value="Enviar">
      </form>
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

