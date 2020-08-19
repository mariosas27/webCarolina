<?php
    $titulo = "Template";
	include 'templates/header.php';
	include 'templates/navegacion.php';

?>
        
        <!-- HERO -->
        <div class="container pt-4">
            <div class="row no-gutters">
                <div class="col-12 hero">
                    <img src="img/nosotros.jpg" alt="nosotros" class="img-fluid">
                    <h2 class="text-uppercase d-none d-md-block py-3 px-5">Título aquí </h2>
                </div>
            </div>
        </div>

        
        <!--  -->
        <div class="container pt-4">
            <div class="row">
                <main class="col-lg-8 contenido-principal">
                    <h2 class="d-block d-md-none text-uppercase text-center">
                        Título aquí
                    </h2>
                </main>

                <aside class="col-lg-4 pt-4 pt-lg-0">
                    <div class="sidebar">
                        <h2 class="text-center text-uppercase mt-4">Algo aquí</h2>
                    </div>
                </aside>
            </div>
        </div>

	

		

<?php
	include 'templates/footer.php';
?>