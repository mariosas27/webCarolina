<?php
	//definir un nombre para cachear 
	$archivo = basename($_SERVER['PHP_SELF']);
	$pagina = str_replace('.php', '', $archivo);

	//definir un archivo para cachear (puede ser .php también)

	if(isset($_GET['id'])){
		$archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
	}else{
		$archivoCache = 'cache/'.$pagina.'.html';
	}
	
	//cuanto tiempo debera estar este archivo almacenado 
	$tiempo = 36000;
	//checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if(file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)){
		include($archivoCache); 
		exit; 
	}

	//si el archivo no existe o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start(); 
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:wght@400;700;900&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
		
		<title> <?php echo $titulo ?> | Carolina Spa</title>
	</head>
	<body>
		<header class="encabezado-sitio container ">
			<div class="row justify-content-md-between align-items-center">
	
				<div class="col-lg-4">
					<a href="#">
						<img src="img/logo.svg" alt="logo" class="img-fluid mx-auto d-block pt-4 pb-4">
					</a>
				</div>
	
				<div class="col-lg-4">
					<nav class="sociales text-center text-lg-right">
						<ul>
							<li><a href="facebook.com"><span class="sr-only"> Facebook </span></a></li>
							<li><a href="twitter.com"><span class="sr-only"> Twitter </span></a></li>
							<li><a href="instagram.com"><span class="sr-only"> Instagram </span></a></li>
							<li><a href="pinterest.com"><span class="sr-only"> Pinterest </span></a></li>
							<li><a href="youtube.com"><span class="sr-only"> YouTube </span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>