<?php

    include_once '../database.php';
	
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Zona Tic Inicio</title>



</head>

<body background="../img/fondo7.png">
<section class="container">

	<!--Inicio de menuusuario-->
<div class="row margen">
		<div class="col-md-2 header">
			<img src="${pageContext.request.contextPath}/resources/img/logon.png" class="img" />
		</div>
		<div class="col-md-10 header">
			<!--Navegación-->
			<!--La cabecera desde aquí-->
			<div class="container-fluid">

				<header>
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="../index.html"><img src=""></a>
						<button class="navbar-toggler" type="button"
							data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="nav-item active"><a class="nav-link"
									href="../">Articulos en general<span
										class="sr-only">(current)</span></a></li>
								<li class="nav-item"><a class="nav-link"
									href="nosotros">Quienes Somos</a></li>
								<li class="nav-item"><a class="nav-link"
									href="misarticulos">Administrar
										articulo</a></li>
							</ul>

							<!--Boton desplegable de configuración-->

							<div class="dropdown">
								<button onclick="myFunction()" class="dropbtn">
									<img src="${pageContext.request.contextPath}/resources/img/16.jpg" width="15%" /> Perfil
								</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="editarperfil">Editar Perfil</a> <a
										href="../">Cerrar sesión</a>
								</div>
							</div>

							<script>

                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
						</div>

					</nav>
				</header>

			</div>
			<!--Fin de la Cabecera-->

	</div>
</div>
<!--Fin de menuusuario-->


	<!--Contenido-->
		<div class="row margenadministrararticulo">
		<!--Articulos-->
		<div class="col-md-12 articulo">
			<div class="row margenadministrararticulo">
				<div class="col-md-12 subar1">
					<!--Articulo en revision-->
					<form id="formSubir">
						<div class="form-group">
						<h5 class="card-title" align="center">Titulo</h5>
						<label for="subir-titulo">Ingresa el titulo de tu articulo</label>
							<input type="text" class="form-control" id="subir-titulo" placeholder="">
						</div><br>
						<div class="form-group">
						<h5 class="card-title" align="center">Reseña</h5>
						<label for="exampleFormControlTextarea1">Agrega una pequeña reseña sobre tu articulo con un limite de 250 palabras</label>
							<textarea class="form-control" id="subir-resena" rows="4"></textarea>
						</div><br>
						<div class="form-group">
                                <h5 class="card-title" align="center">Palabras clave</h5>
                                <p class="card-text"> Ingresar 5 palabras clave para identificar su articulo de manera mas rapida</p>
                                <input id="subir-palabrauno"  type="text" size="35" maxlength="30" value="" name="nombre"><br>
                                <input id="subir-palabrados" type="text" size="35" maxlength="30" value="" name="nombre"><br>
                                <input id="subir-palabratres" type="text" size="35" maxlength="30" value="" name="nombre"><br>
                                <input id="subir-palabracuatro" type="text" size="35" maxlength="30" value="" name="nombre"><br>
                                <input id="subir-palabracinco" type="text" size="35" maxlength="30" value="" name="nombre"><br>

                            </div><br>

						<div class="form-group">
						<h5 class="card-title" align="center">Contenido</h5>
							<label for="subir-contenido">Agrega el contenido de tu articulo</label>
							<textarea class="form-control" id="subir-contenido" rows="8"></textarea>
						</div><br>
						<div class="form-group">
						<h5 class="card-title" align="center">Imagen</h5>
							<label for="exampleFormControlTextarea1">Elige una imagen</label>
						
							<label for="exampleFormControlFile1"></label>
                                    <input type="file" class="form-control-file"
                                        id="subir-imagen">
						</div><br>

						<h5 class="card-title" align="center">Categoria</h5>
						<label for="subir-categoria">Escoja la categoría a la que desee que pertenezca</label>
								<select class="form-control" id="subir-Categoria">

									<?php
										foreach($categorias as $row) {
											echo '<option value="'.$row->idCategoria.'">'.$row->nombreCat.'</option>';
										}
									?>

								</select><br><br>

						<h5 class="card-title" align="center">Estado</h5>
						<label for="subir-categoria">Eliga el estado en ele que se encuentre el articulo</label>
								<select class="form-control" id="subir-estado">
									
								<?php
										foreach($estados as $row) {
											echo '<option value="'.$row->idEstado.'">'.$row->tipoEstado.'</option>';
										}
									?>
									

								</select><br><br>
						<button type="button" class="btn btn-primary" id="subirButton">Enviartodo</button>
					</form>

					
						<!-- Button trigger modal -->
						<!--<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#exampleModalLong" id="subir--Button">Subir</button>-->

			</div>
		</div>


	</div>

	<div class="row margenadministrararticulo">
		<div class="col-md cabeza2">

			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal"
				data-target="#exampleModalLong">Subir</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1"
				role="dialog" aria-labelledby="exampleModalLongTitle"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Vista
								previa</h5>
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

							<div class="row ">
								<div class="col-md-12 prepala">

									<p class="arriba" align="center">Titulo de Artículo.</p>


								</div>

							</div>

							<div class="row">
								<!--Articulos-->
								<div class="col-md-6 preart">

									<p class="arriba" align="center">Visualización artículo.</p>

									<div class="row margenadministrararticulo">
										<div class="col-md-10 subar rreseña">
											<img src="${pageContext.request.contextPath}/resources/img/ejemplo2.png" class="d-block w-100"
												alt="Artículo no Encontrado"/>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.
												Phasellus imperdiet, nulla et dictum interdum, nisi lorem
												egestas vitae scelerisque enim ligula venenatis dolor. Lorem
												ipsum dolor sit amet consectetur adipisicing elit Lorem
												ipsum dolor sit amet consectetur adipisicing elit..<span
													id="dots">...</span><span id="more">Lorem ipsum
													dolor sit amet, consectetur adipiscing elit. Phasellus
													imperdiet, nulla et dictum interdum, nisi lorem egestas
													vitae scelerisque enim ligula venenatis dolor. Lorem ipsum
													dolor sit amet consectetur adipisicing elit Lorem ipsum
													dolor sit amet consectetur adipisicing elit.</span>

											</p>
											<button onclick="myFunction1()" id="myBtn">Leer más</button>

										</div>

									</div>


								</div>


								<div class="col-md-6 preart">

									<p class="arriba" align="center">Visualización reseña.</p>

									<div class="row margenadministrararticulo">
										<div class="col-md-10 subar rreseña">
											<img src="${pageContext.request.contextPath}/resources/img/ejemplo2.png" class="d-block w-100"
												alt="Artículo no Encontrado"/>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing
												elit. Phasellus imperdiet, nulla et dictum interdum, nisi
												lorem egestas vitae scelerisque enim ligula venenatis dolor.
												Lorem ipsum dolor sit amet consectetur adipisicing elit
												Lorem ipsum dolor sit amet consectetur adipisicing elit..</p>

										</div>

									</div>


								</div>

								<nav class="maso">
									<div class="col-md-"></div>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#"
											tabindex="-1" aria-disabled="true"></a></li>
										<li class="page-item"><a class="page-link" href="#">1</a>
										</li>
										<li class="page-item active" aria-current="page"><a
											class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
										</li>
										<li class="page-item"><a class="page-link" href="#">>></a>
										</li>

									</ul>
								</nav>



							</div>

						</div>



					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary"
							data-dismiss="modal">Cerrar</button>
						<button type="button" class="btn btn-primary">Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	
			<!--Footer-->
			<div class="col-md-12 pie">
				<footer>
					<h4>©Derechos Reservados 2019</h4>
					Universidad Tecnologíca del Norte de Guanajuato.
				</footer>

				<div class="linkUTN">

					<a title="UTNG" href="https://www.utng.edu.mx/">
					<img class="linkUTNG" width="15%" src="${pageContext.request.contextPath}/resources/img/linkUTNG.png" alt="UTNG" />
					</a>

				</div>
				<div class="linkfacebook">

					<a title="UTNG" href="https://es-la.facebook.com/UTNGDOLORESHIDALGO-222209577812067/">
					<img class="linkUTNG" width="8%" src="${pageContext.request.contextPath}/resources/img/logofacebook.png" alt="UTNG" />
					</a>
				  
				</div>

			</div>
		  <!--Fin del footer-->

		
	
</section>

</body>

</html>