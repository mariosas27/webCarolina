<?php
    $titulo = "Servicios";
	include 'templates/header.php';
	include 'templates/navegacion.php';

?>
        <!-- HERO -->
        <div class="container pt-4 px-0">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/servicios.jpg" alt="nosotros" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios </h2>
                </div>
            </div>
        </div>

        
        <!--  -->
        <div class="container pt-4">
            <div class="row">
                <main class="col-lg-8 contenido-principal px-0 py-2 pr-md-3 ">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Servicios
                    </h2>
                    <div id="servicios">
                        <div class="card">
                            <div class="card-header" id="servicio1">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                                        Servicio 1
                                    </button>
                                </h2>
                            </div> <!-- card header -->
                            <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facere illum nobis natus non impedit reprehenderit officiis quae, temporibus necessitatibus expedita asperiores modi numquam similique voluptates nihil cumque vel quo.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus ipsum repellendus impedit modi, fugit suscipit! Nisi, debitis perspiciatis nobis, ipsam ut dicta quis eos dolorem culpa ad rerum voluptates possimus!</p>
                                </div>
                            </div>
                        </div> <!-- card -->
                        <div class="card">
                            <div class="card-header" id="servicio2">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                                        Servicio 2
                                    </button>
                                </h2>
                            </div> <!-- card header -->
                            <div id="descripcion2" class="collapse " aria-labelledby="servicio2" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facere illum nobis natus non impedit reprehenderit officiis quae, temporibus necessitatibus expedita asperiores modi numquam similique voluptates nihil cumque vel quo.</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam voluptas ad hic itaque mollitia ipsam dicta laborum quae, ipsum, rerum molestiae exercitationem nesciunt repellat nisi, aspernatur possimus odit temporibus optio.</p>
                                </div>
                            </div>
                        </div> <!-- card -->
                        <div class="card">
                            <div class="card-header" id="servicio3">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                                        Servicio 3
                                    </button>
                                </h2>
                            </div> <!-- card header -->
                            <div id="descripcion3" class="collapse " aria-labelledby="servicio3" data-parent="#servicios">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facere illum nobis natus non impedit reprehenderit officiis quae, temporibus necessitatibus expedita asperiores modi numquam similique voluptates nihil cumque vel quo.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo facilis ipsa quisquam minima alias pariatur sunt tempore eaque officia nam, harum eos, optio est nostrum officiis maiores iure repudiandae accusamus!</p>
                                </div>
                            </div>
                        </div> <!-- card -->
                    </div>
                </main>

                <aside class="col-lg-4 mt-2 pt-4 pt-lg-0 ">
                    <div class="sidebar">
                        <h2 class="text-center text-uppercase mt-4">Nuevos clientes</h2>
                            <p class="lead text-center mt-4">
                                Recibe el 20% de descuento con este cupón
                            </p>
                            <div class="cupon px-2 py-5 mt-5 mb-3">
                                <p class="text-uppercase text-center mb-0">
                                    <span class="display-4">20% descuento</span> <br> en todos los servicios
                                </p>
                            </div>
                    </div>
                </aside>
            </div>
        </div>

        <!-- CITAS -->
		<div class="citas container-fluid py-5 mt-4">
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