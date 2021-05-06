<?php
session_start();
global $arrayCarros;
function arrayGlobal($nome, $color, $lugares,$km, $valor, $telefone, $email, $data, $portas, $portaMala, $new_name){
	var_dump($nome, $color, $lugares,$km, $valor, $telefone, $email, $data, $portas, $portaMala, $new_name);
	$arrayGlobal =  [	
		'Nome' => $nome ,
		'Cor' => $color ,
		'Lugares' => $lugares,
		'Km' => $km,
		'Preco' => $valor,
		'Telefone' => $telefone,
		'Email' => $email,
		'Data' => $data,
		'Portas' => $portas,
		'Porta_mala' => $portaMala,
		'Nome_imagem' => $new_name
	];
	 $_SESSION['arrayCarros'] = $arrayGlobal;
	// array_push($_SESSION['arrayCarros'],$arrayGlobal);
	//var_dump($GLOBALS["arrayCarros"]);
	header("Location: listaCarros.php");
	
}

// $GLOBALS["arrayCarros"] =  [
// 	[
// 	'Nome' => $nome ,
// 	'Cor' => $color ,
// 	'Lugares' => $lugares,
// 	'Km' => $km,
// 	'Preco' => $valor,
// 	'Telefone' => $telefone,
// 	'Email' => $email,
// 	'Data' => $data,
// 	'Portas' => $portas,
// 	'Porta_mala' => $portaMala,
// 	'Nome_imagem' => $new_name
// 	]
// ];
function lista(){
	// $_SESSION['arrayCarros'] = $arrayLocal[[]];
	// var_dump($arrayLocal);
	foreach ($_SESSION as $key => $carro) {
		echo	"<div class='card mb-3'>";
		echo	"<img class='card-img-top' src='assets/img/" . $carro['Nome_imagem'] ."' alt='Card image cap'>";
		echo "<div class='card-body'>";
		echo   "<h3 class='card-title'>" . $carro['Nome'] . "</h3>";
		echo "  	<div class='container'>";
		echo			"<p class='card-text' >Cor: <h5 style='background-color:" . $carro['Cor'] ."; border: 2px solid black'> <br>    </h5></p>";
		echo			"<p class='card-text'>Lugares: " . $carro['Lugares'] ."</p>";
		echo			"<p class='card-text'>Kilometragem: " . $carro['Km'] ." Km</p>";
		echo			"<p class='card-text'>Preco: R$:" . $carro['Preco'] ."</p>";
		echo			"<p class='card-text'>Telefone: " . $carro['Telefone'] ."</p>";
		echo			"<p class='card-text'>Email: " . $carro['Email'] ."</p>";
		echo			"<p class='card-text'>Ano: " . $carro['Data'] ."</p>";
		echo			"<p class='card-text'>Numero de Portas: " . $carro['Portas'] ."</p>";
		echo			"<p class='card-text'>Espaco Porta-malas: " . $carro['Porta_mala'] ." L</p>";
		echo			"<p class='card-text'><small class='text-muted'>Atualizado <strong>" . date('d/m/Y H:i') ."<strong></small></p>";
		echo		"</div>";
		echo  	"</div>";
		echo "</div>";
	}
}

function arrayContato( $nome,$email,$texto){
	$arrayContato =  [	
		'NomeContato' => $nome ,
		'EmailContato' => $email,
		'Texto' => $texto
	];
	 $_SESSION['arrayContato'] = $arrayContato;
	 header("Location: listaCarros.php");
}

function listaContatos(){
	// $_SESSION['arrayCarros'] = $arrayLocal[[]];
	// var_dump($arrayLocal);
	foreach ($_SESSION as $key => $contato) {
		echo	"<div class='card mb-3'>";
		echo "<div class='card-body'>";
		echo   "<h3 class='card-title'>" . $contato['NomeContato'] . "</h3>";
		echo "  	<div class='container'>";
		echo			"<p class='card-text'>Email: " . $contato['EmailContato'] ."</p>";
		echo			"<p class='card-text'>Texto: " . $contato['Texto'] ." </p>";
		echo			"<p class='card-text'><small class='text-muted'>Atualizado <strong>" . date('d/m/Y H:i') ."<strong></small></p>";
		echo		"</div>";
		echo  	"</div>";
		echo "</div>";
	}
}

?>
