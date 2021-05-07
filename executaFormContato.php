<?php
 require_once "funcoes.php";
if (isset($_POST["enviar"])) {
    
 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $texto = $_POST["texto"];

    arrayContato( $nome,$email,$texto);
 
  
}


?>