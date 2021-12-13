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
			<li><a href="enviados.php" onclick="toggle()">Mensajes</a></li>
			<li><a href="registrarse.php" onclick="toggle()">Registrarse</a></li>	
		</ul>
		<div class="toggle" onclick="toggle()"></div>
	</header>

    <section class="banner3" id="home">
		<div></div>
	</section>

    <section class="sec contact" id="contact">
		<div class="content">
			<div class="mxw800p">
				<h3>Envíanos un mensaje</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			</div>
			<div class="contactForm">
				<form action="mensaje.php" method="POST">
					<div class="row100">
						<div class="inputBx50">
							<input type="text" name="nombrecomp" placeholder="Nombre Completo" required>
						</div>
						<div class="inputBx50">
							<input type="email" name="email" placeholder="Email" required>
						</div>
					</div>
					<div class="row100">
						<div class="inputBx100">
							<input type="text" name="mensaje" placeholder="Mensaje"required>
						</div>
					</div>
					<p>
           			 <label for="disclaimer">Acepto las <a href="aviso.php">condiciones de uso y privacidad</a></label>
          			  <input type="checkbox" name="disclaimer" id="disclaimer"required>
       				 </p>					
					<div class="row100">	
						<div class="inputBx100">
							<input type="submit" value="send" required>
						</div>
					</div>
					
				</form>
			</div>
			<div class="sci">
				<ul>
					<li><a href="#"><img src="imgs/facebook.png"></a></li>
					<li><a href="#"><img src="imgs/twitter.png"></a></li>
					<li><a href="#"><img src="imgs/linkedin.png"></a></li>
				</ul>
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
		
		

});
	</script>
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>