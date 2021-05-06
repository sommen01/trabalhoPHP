<?php
 require_once "funcoes.php";
if (isset($_POST["enviar"])) {
    
 
    $nome = $_POST["nome"];
    $color = $_POST["color"];
    $lugares = $_POST["lugares"];
    $km = $_POST["km"];
    $valor = $_POST["valor"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $portas = $_POST["portas"];
    $portaMala = $_POST["portaMalas"];
    $ext = strtolower(substr($_FILES['img']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = './assets/img/'; //Diretório para uploads 
    move_uploaded_file($_FILES['img']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    echo("Imagen enviada com sucesso!");
    arrayGlobal( $nome, $color, $lugares,$km, $valor, $telefone, $email, $data, $portas, $portaMala, $new_name);
 
  
}


?>