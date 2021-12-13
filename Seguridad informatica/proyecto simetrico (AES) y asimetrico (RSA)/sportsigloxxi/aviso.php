<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sport Siglo XXI</title>
	<link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel=icon href="imgs/logo.jfif" sizes="16x16" type="image/png">
</head>
<body style="background: black;">
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
	<section class="banner6" id="home">
		&nbsp;
		<div style="color: black"><font size="6">Aviso de privacidad</font></div>
	</section>
	<br>
	<h1 align="center" style="color: white;">Información sobre nosotros</h1>
	<p align="justify" style="color: white;">Luis Ángel Domínguez Santiz mejor conocido como el dueño de SPORTS SIGLO
		XXI, con domicilio en Rubén Jaramillo No 20, Col. Emiliano Zapata, Ocosingo,
		Chiapas, México y portal de internet www.sportssigloxxi.com, es el responsable del
		uso y protección de sus datos personales, y al respecto le informamos lo siguiente:
	</p>
	<h2 align="center" style="color: white;">¿Para qué fines utilizaremos sus datos personales?</h2>
	<p align="justify" style="color: white;">Los datos personales que recabamos de usted, los utilizaremos para las siguientes
		finalidades que son necesarias para el servicio que solicita:<br>Respuesta a mensajes del formulario de contacto, Prestación de cualquier servicio
		solicitado, Envío de productos adquiridos en esta tienda en línea
		Envío de ofertas de productos o servicios que se ofrecen en la tienda por correo
		electrónico
	</p>
	<h2 align="center" style="color: white;">¿Qué datos personales utilizaremos para estos fines?</h2>
	<p align="justify" style="color: white;">Para llevar a cabo las finalidades descritas en el presente aviso de privacidad,
		utilizaremos los siguientes datos personales:<br>Datos de identificación y contacto, Datos laborales, Datos sobre pasatiempos.
	</p>
	<h2 align="center" style="color: white;">¿Con quién compartimos su información personal y para qué fines?</h2>
	<p align="justify" style="color: white;">Le informamos que sus datos personales son compartidos fuera del país con las
		siguientes personas, empresas, organizaciones o autoridades distintas a nosotros,
		para los siguientes fines:<br>Envió de los productos que se compran, gobierno del pais residente.
	</p>
	<h2 align="center" style="color: white;">El uso de tecnologías de rastreo en nuestro portal de internet
	</h2>
	<p align="justify" style="color: white;">Le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento
	como usuario de internet, así como brindarle un mejor servicio y experiencia al
	navegar en nuestra página. Los datos personales que obtenemos de estas
	tecnologías de rastreo son los siguientes: <br> <br> Identificadores, nombre de usuario y contraseñas de sesión, Fecha y hora del inicio
	y final de una sesión de un usuario, Páginas web visitadas por un usuario, Publicidad
	revisada por un usuario, Listas y hábitos de consumo en páginas de compras. <br> <br>
	Estas cookies, web beacons y otras tecnologías pueden ser deshabilitadas. Para
	conocer cómo hacerlo, consulte el menú de ayuda de su navegador. Tenga en
	cuenta que, en caso de desactivar las cookies, es posible que no pueda acceder a
	ciertas funciones personalizadas en nuestros sitio web.


	</p>

	<p align="right" style="color:white;">Última actualización de este aviso de privacidad: 10/09/2021</p>

	<footer class="bg-dark text-white">
		<div class="container">
			<nav class="row">
				<ul class="col-3 list-unstyled">
					<li class="font-weight-bold text-uppercase mr-2">Sobre nosotros</li>
					<li><a href="aviso.php" class="text-reset">Aviso de privacidad</a></li>
					<li><a href="#" class="text-reset">Empleo</a></li>
					<li><a href="#" class="text-reset">Inversionistas</a></li>
				</ul>
				<ul class="col-3 list-unstyled">
					<li class="font-weight-bold text-uppercase mr-2">Redes sociales</li>
					<li><a href="#" class="text-reset">Facebook</a></li>
					<li><a href="#" class="text-reset">Twitter</a></li>
					<li><a href="#" class="text-reset">Instagram</a></li>
				</ul>
			</nav>
		</div>
		
	</footer>

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