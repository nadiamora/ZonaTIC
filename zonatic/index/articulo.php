<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css" />
	<title>Zona Tic Inicio</title>



</head>
<!-- Solo el Body -->

<body background="../img/fondo7.png">
	<section class="container">

		<!--Inicio de barra de navegación-->
		<div class="row margen">
			<div class="col-md-2 header">
				<img src="${pageContext.request.contextPath}/resources/img/logon.png" class="img" />
			</div>
			<div class="col-md-10 header">
				<!--Navegación-->
				<div class="container-fluid">
					<header>
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="index.html"><img src=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item active"><a class="nav-link" href="/zonatic">Inicio <span
												class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="quienessomos">Quienes Somos</a></li>
									<li class="nav-item">
								</ul>
								<!-- Button trigger modal -->
								<div class="dropdown">
									<button style="margin-left:;" type="button" class="btn btn-primary"
										data-toggle="modal" data-target="#exampleModal">Iniciar Sesión</button>
								</div>

								<!-- Inicio de Sesión Pop Up -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Iniciar
													Sesión</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">

												<form id="formLogin">
													<input type="text" id="numControl" class="form-Control"
														placeholder="Número de control" />
													<input type="password" class="form-control" id="contrasena"
														placeholder="Contraseña" />

													<button type="Envíar" class="btn btn-primary"
														id="loginButton">Ingresar</button>
												</form>



												<a class="nav-link" href="recuperar">Recuperar
													contraseña</a>

											</div>
											<div class="registro-footer"></div>
										</div>
									</div>
								</div>
								</li>

								<button style="margin-left:" type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#exampleModalCenter">Registrarse</button>

								<!-- Registrar -->
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
									aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalCenterTitle">Registrarse</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Envíar">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">

												<form id="formRegistrar">
													<div class="form-group">
														<label for="correo">E-mail</label> <input type="email"
															class="form-control" id="correo"
															placeholder="nombre@ejemplo.com">
													</div>
													<div class="form-group row">
														<label for="contrasenaRegistrar"
															class="col-sm-2 col-form-label">Contraseña</label>
														<div class="col-sm-10">
															<input type="password" class="form-control"
																id="contrasenaRegistrar" placeholder="">
														</div>
													</div>
													<div class="form-group row">
														<label for="recontrasena"
															class="col-sm-2 col-form-label">Confirmar
															contraseña</label>
														<div class="col-sm-10">
															<input type="password" class="form-control"
																id="recontrasena" placeholder="">
														</div>
													</div>
													<div class="form-group">
														<label for="nombre">Nombre de
															Usuario</label> <input type="text" class="form-control"
															id="nombre" placeholder="">
													</div>
													<div class="form-group">
														<label for="apellidoPat">Apellido Paterno</label>
														<input type="text" class="form-control" id="apellidoPat"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="apellidoMat">Apellido Materno</label>
														<input type="text" class="form-control" id="apellidoMat"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="numControlRegistrar">Número de
															control</label> <input type="text" class="form-control"
															id="numControlRegistrar" placeholder="">
													</div>
													<p>Escoja algún tipo de usuario</p>
													<select class="form-control" id="idUsuario">

														<option value="1"> Usuario</option>
														<option value="2">Revisor contenido</option>
														<option value="3">Revisor estilo</option>
														<option value="4">Administrador</option>
													</select>
											</div>
											<button type="Envíar" class="btn btn-primary"
												id="RegisterButton">Registrar</button>

											</form>

										</div>
									</div>
								</div>
								</ul>
							</div>
						</nav>


					</header>

				</div>
			</div>
		</div>

		<!--Bucador-->
		<div class="row">
			<div class="col-md header4">
				<div>
					<nav class="navbar navbar-light1" style="background-color: #e3f2fd" ;>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Articulos"
								aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
						</form>
					</nav>
				</div>
			</div>
		</div>
		<!--Fin de Bucador-->
		<!--Fin de barra de navegación-->

		<div class="row">
			<div class="col-md-4"></div>

		</div>
		<!--Articulo-->
		<div>
			<section class="seccion">
				<article>
					<hgroup>
						<h1>Lorem ipsum dolor sit amet</h1>
						<h3>Duis aute irure dolor in reprehenderit in voluptate velit.</h3>
					</hgroup>

					<div class="media">
						<img src="${pageContext.request.contextPath}/resources/img/utng.jpg" class="mr-3" alt="..." />
						<div class="">
							<h5 class="mt-0">Media heading</h5>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
								eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
								enim ad minim veniam, quis nostrud exercitation ullamco laboris
								nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
								reprehenderit in voluptate velit esse, cillum dolore eu fugiat
								nulla pariatur. Excepteur sint occaecat cupidatat non cillum
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat
								cupidatat non proident, sunt in culpa qui officia deserunt mollit
								anim id est laborum. Lorem ipsum dolor sit amet, consectetur
								adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore magna aliqua. Ut enim ad minim veniam, consequat. Duis
								aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fugiat nulla pariatur.<span id="dots">...</span><span id="more"> Excepteur
									sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est
									laborum.Lorem ipsum dolor sit amet, consectetur adipisicing
									elit, sed do eiusmod tempor incididunt ut labore et dolore magna
									aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
									aute irure dolor in reprehenderit in voluptate velit esse cillum
									dolore eu fugiat nulla pariatur. Excepteur sint occaecat
									cupidatat non proident, sunt in culpa qui officia deserunt
									mollit anim id est laborum.Duis aute irure dolor in
									reprehenderit in voluptate velit esse cillum dolore eu fugiat
									nulla pariatur. Excepteur sint occaecat cupidatat non proident,
									sunt in culpa qui officia deserunt mollit anim id est
									laborum.Lorem ipsum dolor sit amet, consectetur adipisicing
									elit, sed do eiusmod tempor incididunt ut labore et dolore magna
									aliqua. Ut enim ad minim veniam, quis nostrud exercitation
									ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
							</p>
							<button class="leermasariculoespeci" onclick="myFunction1()" id="myBtn">Leer más sobre este
								articulo</button>

						</div>
					</div>

				</article>

			</section>
			<div class="vistasarticuloespecifico">
				<p>
					<time datetime="visitas" m>50 visitas</time>
				</p>
			</div>


			<!--Caja de comentarios-->
			<div class="container">
				<div class="row" align="center">
					<div class="col-md" align="center">
						<div class="comentador">
							<img src="${pageContext.request.contextPath}/resources/img/perfil.jpg" />
						</div>

						<form class="otros">
							<div class="comen">
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
							</div>
						</form>
						<p>
							<input type="reset" value="Enviar">
						</p>


					</div>
				</div>
			</div>
			<div align="center">
				<section class="comentarios">
					<article>
						<hgroup>
							<h4>Comentarios</h4>
						</hgroup>

						<div class="container">
							<div class="row">
								<div class="col-md">
									<div class="comentador">
										<img src="${pageContext.request.contextPath}/resources/img/nadia.jpg"
											width="220" height="80" />
									</div>
									<div style="padding: 12px; line-height: 1.4;" align="left">
										<b>Nadia Mora:</b> Muy buen artículo.
									</div>
								</div>
							</div>
						</div>
			</div>
			</article>

		</div>

		<!--Footer-->
		<div class="col-md-12 pie">
			<footer>
				<h4>©Derechos Reservados 2019</h4>
				Universidad Tecnologíca del Norte de Guanajuato.
			</footer>

			<div class="linkUTN">

				<a title="UTNG" href="https://www.utng.edu.mx/">
					<img class="linkUTNG" width="15%"
						src="${pageContext.request.contextPath}/resources/img/linkUTNG.png" alt="UTNG" />
				</a>

			</div>
			<div class="linkfacebook">

				<a title="UTNG" href="https://es-la.facebook.com/UTNGDOLORESHIDALGO-222209577812067/">
					<img class="linkUTNG" width="8%"
						src="${pageContext.request.contextPath}/resources/img/logofacebook.png" alt="UTNG" />
				</a>

			</div>

		</div>
		<!--Fin del footer-->

	</section>
</body>

</html>