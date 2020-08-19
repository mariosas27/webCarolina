<?php
    $titulo = "Nosotros";
	include 'templates/header.php';
	include 'templates/navegacion.php';

?>
        <!-- HERO -->
        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/nosotros.jpg" alt="nosotros" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros </h2>
                </div>
            </div>
        </div>

        
        <!--  -->
        <div class="container pt-4">
            <div class="row">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Nosotros
                    </h2>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quia saepe atque veritatis ipsum illum autem ullam excepturi, eligendi impedit illo aliquid esse dicta cupiditate accusantium. Minus iusto iste molestiae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, dignissimos cumque nemo corporis dolores, aliquam libero porro reiciendis ipsa accusamus sapiente consectetur, quisquam assumenda officia? Odit rerum repellendus numquam modi. lorem</p>
                    <p class="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae soluta, mollitia molestiae obcaecati nemo commodi cumque blanditiis non cum excepturi eaque vero reprehenderit ipsum ex error, voluptates nisi suscipit culpa! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique tempore, sapiente aut adipisci tenetur ad nostrum dolores quasi vitae autem sed aperiam consectetur! Vel, corporis impedit quasi temporibus est libero!</p>

                    <h1 class="text-center text-uppercase mt-5 encabezado">
                        <span class="text-lowercase d-block">conoce nuestras</span> instalaciones
                    </h1>
                    <div class="imagenes pt-4">
                        <a href="#" data-target="#imagen_1" data-toggle="modal">
                            <img src="img/galeria_mini_01.jpg" alt="imagen 1" class="img-fluid mt-2">
                        </a>
                        <a href="#" data-target="#imagen_2" data-toggle="modal" >
                            <img src="img/galeria_mini_02.jpg" alt="imagen 1" class="img-fluid mt-2">
                        </a>
                        <a href="#" data-target="#imagen_3" data-toggle="modal">
                            <img src="img/galeria_mini_03.jpg" alt="imagen 1" class="img-fluid mt-2">
                        </a>
                        <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_01.jpg" alt="imagen 1" class="img-fluid">
                                    </div> <!-- modal-body -->
                                </div><!-- modal-content -->
                            </div> <!-- modal-dialog  -->
                        </div> <!-- modal --> 

                        <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_02.jpg" alt="imagen 2" class="img-fluid">
                                    </div> <!-- modal-body -->
                                </div><!-- modal-content -->
                            </div> <!-- modal-dialog  -->
                        </div> <!-- modal --> 

                        <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="img/galeria_grande_03.jpg" alt="imagen 3" class="img-fluid">
                                    </div> <!-- modal-body -->
                                </div><!-- modal-content -->
                            </div> <!-- modal-dialog  -->
                        </div> <!-- modal --> 
                    </div>
                </main>

                <aside class="col-lg-4 mt-2 pt-4 pt-lg-0 align-self-start">
                    <div class="sidebar horario">
                        
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
                </aside>
            </div>
        </div>

	


<?php
	include 'templates/footer.php';
?>