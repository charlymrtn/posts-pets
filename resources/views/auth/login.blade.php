<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pets - Ingresar</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- Style -->
    <link href="css/minificado/bootstrap.min.css" rel="stylesheet" />
    <link href="css/minificado/ingreso.min.css" rel="stylesheet"/>

</head>

<body class="pagina-ingreso">
	<nav class="navbar navbar-transparent navbar-absolute" style="padding-top: 65px;">
    	<div class="container">
        	<div class="logo float-left"><a href="index.html"><img src="images/logo.png" alt="Logo"></a></div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('images/usuarios/ingresar.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card tarjeta-registro">
							<form class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Ingresar</h4>
								</div>
								<p class="text-divider">¡Volviste! Bienvenido nuevamente &#10084;</p><br>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Correo electrónico...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Contraseña..." class="form-control" />
									</div><br>


									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Recordar mis datos
										</label>
									</div><br>
								</div>
								<div class="footer text-center">
									<a href="#" class="btn btn-simple btn-primary btn-lg">Ingresar <i class="material-icons">fingerprint</i></a>
								</div>
								
								<div class="password"><a href=""><span class="label label-danger">¿Olvidaste la contraseña?</span></a></div>
								

							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Inicio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
							<li>
								<a href="#">
								   Nosotros
								</a>
							</li>
							<li>
								<a href="#">
									Legal
								</a>
							</li>
						</ul>
		            </nav>
		            <div class="copyright pull-right">
		                <p>Hecho con el &#10084; <strong> hacia los animales</strong></p>
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	<!--   JS   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>
	<script src="js/material-kit.js" type="text/javascript"></script>

</html>
