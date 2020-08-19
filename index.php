<?php
	$titulo = "Inicio";
	include 'templates/header.php';
	include 'templates/navegacion.php';
	include 'inc/funciones.php';

?>
		<!-- SLIDER -->
		<div class="container">
			<div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slider-principal" data-slide="0" class="active"></li>
					<li data-target="#slider-principal" data-slide="1"></li>
					<li data-target="#slider-principal" data-slide="2"></li>
				</ol>



				<div class="carousel-inner" role="listbox">
					<!-- ITEM 1 -->
					<div class="carousel-item active " >
						<img class="img-fluid" src="img/slide_01.jpg" alt="Nuestras Instalaciones">
						<div class="carousel-caption">
							<h3 class="text-uppercase">Nuevas instalaciones</h3>
						</div>
					</div>

					<!-- ITEM 2 -->
					<div class="carousel-item">
						<img class="img-fluid" src="img/slide_02.jpg" alt="Conoce nuestros servicios">
						<div class="carousel-caption">
							<h3 class="text-uppercase">Conoce nuestro servicios</h3>
						</div>
					</div>


					<!-- ITEM 3 -->
					<div class="carousel-item">
						<img class="img-fluid" src="img/slide_03.jpg" alt="Promocion">
						<div class="carousel-caption">
							<h3 class="text-uppercase"> 2x1 en todos los servicios</h3>
						</div>
					</div>
				</div>

				<!-- CONTROLES -->
				<a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>

				<a href="#slider-principal" class="carousel-control-next" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>

			</div>
		</div>




		<!--  -->
		<section class="nuevo-sitio py-5">
			<h2 class="text-center text-uppercase  mt-4 encabezado">
				<span class="text-lowercase d-block">bienvenido a nuestro</span> sitio web
			</h2>
			<p class="text-center mt-4">Te sentirás como nuevo(a) con nuestros  <br> masajistas profesionales</p>
		</section>

		<!-- SERVICIOS -->

		<div class="container mb-5">
			<div class="row">
				<!-- SERVICIO 1 -->
				<div class="col-md-4 text-center mb-4">
					<div class="img-servicio">
						<img src="img/servicio_01.jpg" alt="servicio 1" class="img-fluid">
						<div class="row no-gutters justify-content-center">
							<div class="col-md-10 servicio-info pt-4">
								<h3 class="text-center text-uppercase encabezado">
									<span class="text-lowercase d-block">Conoce sobre</span> nosotros
								</h3>
								<a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3"> Leer más</a>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICIO 2 -->
				<div class="col-md-4 text-center mb-4">
					<div class="img-servicio">
						<img src="img/servicio_02.jpg" alt="servicio 1" class="img-fluid">
						<div class="row no-gutters justify-content-center">
							<div class="col-md-10 servicio-info pt-4">
								<h3 class="text-center text-uppercase encabezado">
									<span class="text-lowercase d-block">Nuestros</span> servicios
								</h3>
								<a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3"> Leer más</a>
							</div>
						</div>
					</div>
				</div>

				<!-- SERVICIO 3 -->
				<div class="col-md-4 text-center mb-4">
					<div class="img-servicio">
						<img src="img/servicio_03.jpg" alt="servicio 1" class="img-fluid">
						<div class="row no-gutters justify-content-center">
							<div class="col-md-10 servicio-info pt-4">
								<h3 class="text-center text-uppercase encabezado">
									<span class="text-lowercase d-block">Visita nuestra</span> tienda
								</h3>
								<a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3"> Leer más</a>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<!-- HORARIOS -->
		<div class="horario">
			<div class="container">
				<div class="row">
					<div class="col-md-6 p-4 ">
						<h2 class="text-center text-uppercase mt-5">Horarios</h2>
						<p class="text-center lead mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil beatae, quasi expedita, modi eos vero dolorem in, voluptatibus fugiat numquam libero. Dolorum dolorem impedit explicabo non culpa laudantium accusantium numquam!</p>
						<table class="table table-hover text-center mt-3">
							<thead>
								<tr>
									<th class="text-center">Día</th>
									<th class="text-center">De</th>
									<th class="text-center">Hasta</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								   <td>Lunes</td>
									<td>09:00</td>
									<td>19:00</td>
								</tr>
								<tr>
									<td>Martes</td>
									<td>09:00</td>
									<td>19:00</td>
								</tr>
								<tr>
									<td>Miércoles</td>
									<td>09:00</td>
									<td>19:00</td>
								</tr>
								<tr>
									<td>Jueves</td>
									<td>09:00</td>
									<td>19:00</td>
								</tr>
								<tr>
									<td>Viernes</td>
									<td>09:00</td>
									<td>19:00</td>
								</tr>
								<tr>
									<td>Sábado</td>
									<td>10:00</td>
									<td>14:00</td>
								</tr>
								<tr>
									<td>Domingo</td>
									<td>Cerrado</td>
									<td>Cerrado</td>
								</tr>
							</tbody>
					   </table>
					</div>
					<div class="col-md-6 bg-horario"></div>
				</div>
			</div>
		</div>

		<!-- PRODUCTOS -->
		<section class="productos container">
			<h2 class="encabezado text-center text-uppercase mt-4">
				<span class="text-lowercase d-block">Nuestros</span> productos
			</h2>
			<div class="row py-5">
				<!-- CARDS -->
				<?php
					$productos = obtenerProductos(4);
					
					while($producto = $productos->fetch_assoc()){

				?>

				<!-- CARD  -->
				<div class=" col-sm-6 col-lg-3 mb-4">
					<div class="card"> 
						<a href="producto.php?id=<?php echo $producto['id']; ?>">
							<img src="img/<?php echo $producto['imagen_mini']; ?>" class="card-img-top" alt="producto">
							<div class="card-body">
								<h3 class="card-tittle text-center text-uppercase"><?php echo $producto['nombre']; ?></h3>
								<p class="card-text text-uppercase">
									<?php echo $producto['descripcion_corta']; ?>
								</p>
								<p class="precio mb-0 lead text-center">$<?php echo $producto['precio']; ?></p>
							</div>
						</a>
					</div>
				</div>

				<?php }?>
			</div>
		</section>


		<!-- CITAS -->
		<div class="citas container-fluid py-5">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 text-center">
					<h3 class="text-uppercase">Realiza una cita</h3>
					<p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe rerum harum minus, perferendis accusantium deleniti reprehenderit voluptates amet explicabo rem incidunt </p>
					<a href="#" class="btn btn-primary mt-3 text-uppercase">Leer más</a>
				</div>
			</div>
		</div>


<?php
	include 'templates/footer.php';
?>