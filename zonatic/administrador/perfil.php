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
     <!--Inicio de la barra de navegación-->    
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
                            <a class="navbar-brand" href="index.html"><img src=""></a>
                            <button class="navbar-toggler" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item"><a class="nav-link"
                                        href="solicitudes">Solicitudes</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                        href="publicar">Validar articulo</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                        href="historial">Historial</a></li>
                                </ul>
    
                                <!--Boton desplegable de configuración-->
    
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">
                                        <img src="${pageContext.request.contextPath}/resources/img/16.jpg" width="15%" /> Perfil
                                    </button>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="perfil">Editar Perfil</a> <a
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
        <!--Fin de la barra de navegación-->
	<!--Editar perfil-->
	<div class="perfil">
		<img src="${pageContext.request.contextPath}/resources/img/perfil.jpg" width="200" height="150"/>
		<button type="button" class="btn btn-outline-primary">Cambiar
			foto de perfil</button>
		<form>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Nombre de usuario</label> <input
						type="email" class="form-control" id="inputEmail4"
						placeholder="Usuario">
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Cambiar contraseña</label> <input
						type="password" class="form-control" id="inputPassword4"
						placeholder="Ingresa tu contraseña actual">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Nueva contraseña</label> <input
						type="text" class="form-control" id="formGroupExampleInput"
						placeholder="">
				</div>
				<div class="form-group">
					<label for="formGroupExampleInput">Verificar contraseña</label> <input
						type="text" class="form-control" id="formGroupExampleInput"
						placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Correo electrónico</label> <input
					type="text" class="form-control" id="inputAddress" placeholder="">
			</div>

			<div class="form-group col-md-4">
				<label for="inputState">Área académica</label> <select
					id="inputState" class="form-control">
					<option selected>Tecnologías de la Información y
						Comunicación</option>
					<option selected>Industrial Electrica y Electrónica</option>
					<option selected>Económico Administrativo</option>

				</select>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck">
						<label class="form-check-label" for="gridCheck"> Aceptar </label>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>


		</form>
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


    </div>
    <!--Fin del footer-->
</section>
</body>
</html>