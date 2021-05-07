<?php
session_start();
global $arrayCarros, $arrayContato;
function arrayGlobal($nome, $color, $lugares,$km, $valor, $telefone, $email, $data, $portas, $portaMala, $new_name){
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

	$_SESSION['arrayCarros'][] = $arrayGlobal;
	
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
	foreach ($_SESSION['arrayCarros'] as $key => $carro) {
		echo 
		"<div class=\"col-sm-6\">
				
			<div class=\"card mb-3\">
				<img class=\"card-img-top\" src=\"./assets/img/".$carro['Nome_imagem']."\" alt=\"Card image cap\">
				<div class=\"card-body\">
					<h2 class=\"card-title font-weight-bold text-center text-truncate\">".$carro['Nome']."</h2>
					<div class=\"container-fluid\">
						<table class=\"table table-striped card-text flex-nowrap text-truncate\">
							<tr>
								<th scope=\"col\">Atributo</th>
								<th scope=\"col\">Caracteristica</th>
							</tr>
							<tr>
								<th scope=\"row\">Cor</th>
								<td><h5 style=\"background-color:".$carro['Cor']."; border: 2px solid black\" > <br> </h5></td>
							</tr>
							<tr>
								<th scope=\"row\">Lugares</th>
								<td>".$carro['Lugares']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Kilometragem</th>
								<td>".$carro['Km']." Km</td>
							</tr>
							<tr>
								<th scope=\"row\">Preco</th>
								<td>R$: ".$carro['Preco']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Telefone</th>
								<td>".$carro['Telefone']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Email</th>
								<td>".$carro['Email']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Ano</th>
								<td>".$carro['Data']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Numero de Portas</th>
								<td>".$carro['Portas']."</td>
							</tr>
							<tr>
								<th scope=\"row\">Espaco Porta-malas</th>
								<td>".$carro['Porta_mala']."L</td>
							</tr>
						</table>
						<p class=\"card-text\"><small class=\"text-muted\">Atualizado <strong>".date('d/m/Y H:i')."</strong></small></p>
					</div>

				</div>

			</div>

		</div>";
	}
}

function arrayContato($nome,$email,$categoria,$texto){
	$arrayContato =  [	
		'NomeContato' => $nome ,
		'EmailContato' => $email,
		'CategoriaContato' => $categoria,
		'Texto' => $texto
	];
	 $_SESSION['arrayContato'][] = $arrayContato;
	 header("Location: listarContatos.php");
}

function listaContatos(){
	// $_SESSION['arrayCarros'] = $arrayLocal[[]];
	// var_dump($arrayLocal);
	foreach ($_SESSION['arrayContato'] as $key => $contato) {
		echo	"<div class='card mb-3'>";
		echo "<div class='card-body'>";
		echo "<h3 class='card-title'>" . $contato['NomeContato'] . "</h3>";
		echo "  	<div class='container'>";
		echo			"<p class='card-text'>Email: " . $contato['EmailContato'] ."</p>";
		echo			"<p class='card-text'>Categoria: " . $contato['CategoriaContato'] ."</p>";
		echo			"<p class='card-text'>Texto: " . $contato['Texto'] ." </p>";
		echo			"<p class='card-text'><small class='text-muted'>Atualizado <strong>" . date('d/m/Y H:i') ."<strong></small></p>";
		echo		"</div>";
		echo  	"</div>";
		echo "</div>";
	}
}

?>
