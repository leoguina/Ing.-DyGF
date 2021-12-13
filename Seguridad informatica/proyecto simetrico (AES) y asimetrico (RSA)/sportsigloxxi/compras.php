<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sport SIglo XXI</title>
	<link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel=icon href="imgs/logo.jfif" sizes="16x16" type="image/png">
</head>
<body>
    <header id="header">
		<a href="220801.html" class="logo">Sport Siglo XXI</a>
		<ul>
			<li><a href="clientes.php" onclick="toggle()">Clientes</a></li>
			<li><a href="compras.php" onclick="toggle()">Datos Bancarios</a></li>
			<li><a href="contacto.php" onclick="toggle()">Contacto</a></li>
			<li><a href="enviados.php" onclick="toggle()">Mensajes </a></li>
			<li><a href="registrarse.php" onclick="toggle()">Registrarse</a></li>	
		</ul>
		<div class="toggle" onclick="toggle()"></div>
	</header>

    <section class="banner2" id="home">

	</section>

    <section class="sec contact" id="contact">
		<div class="content">
			<div class="mxw800p">
				<h3>Datos Bancarios</h3>
				<p>Elige un método de pago, completa la información</p>
			</div>
			<div class="contactForm">
				<form action="bancarios.php" method="POST">
					<div class="row100">
						<div class="inputBx50">
							<input type="text" required name="nombre" placeholder="Nombre">
						</div>
						<div class="inputBx50">
							<input type="text" required name="apellidos" placeholder="Apellidos">
						</div>
					</div>
                    <div class="row100">
						<div class="inputBx50">
							<input type="password" required name="tarjeta" placeholder="Numero de tarjeta">
						</div>
						<div class="inputBx50">
							<input type="Month" required name="expiracion" placeholder="Fecha de expiración">
						</div>
					</div>
					<div class="row100">
						<div class="inputBx50">
							<input type="password" required name="codigo" placeholder="Código de seguridad">
						</div>
					</div>
					<p>
           			 <label for="disclaimer">Acepto las <a href="aviso.php">condiciones de uso y privacidad</a></label>
          			  <input type="checkbox" name="disclaimer" id="disclaimer"required>
       				 </p>
                    
					<div class="row100">
						<div class="inputBx100">
							<input type="submit" value="Guardar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

    <!--Creación de la clase sticky cuando se haga scroll en el sitio-->
	<script type="text/javascript">
		window.addEventListener("scroll", function () {
			var header = document.querySelector("header");
			header.classList.toggle("sticky", window.scrollY > 0);
		})
		function toggle() {
			var header = document.querySelector("header")
			header.classList.toggle("active");
		}
	</script>
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>