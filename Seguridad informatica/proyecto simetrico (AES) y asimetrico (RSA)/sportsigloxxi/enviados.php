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

	<section class="banner4" id="home">

	</section>

	<!--<form action="generarllaves.php" method="POST">
		<br>Creaci&oacuten de llave privada y p&uacuteblica <br><br>

		<input type="submit" name="boton" value="Generar">
	</form>-->

	<center>
		<h1>Mensajes</h1>
	</center>

	<form action="enviados.php" method="post" id="frmbuscar">
		<tr class="espacio">
			<td align="right"> <label for="nombre">Coloca el codigo del cifrado </label><textarea name="llave"></textarea>
			<td align="center" colspan="2"><button type="submit" class="btn btn-primary" placeholder="" name="enviar">Descifrar</button></td>
		</tr>
	</form>

	<br>

	<?php


	if (isset($_POST['llave'])) {
		$llave = $_POST['llave'];
		require_once("conexion.php");

		$result = mysqli_query($link, "SELECT * FROM mensajes");

		echo "<table class='table table-striped'>";
		echo "<tr>

			<th class='success'>
				<center>id</center>
			</th>
			<th class='success'>
				<center>Nombre</center>
			</th>
			<th class='success'>
				<center>Mensaje</center>
			</th>

		</tr>";
			if ($llave != NULL) {
				if (openssl_pkey_get_private($llave)) {

					while (($row = mysqli_fetch_array($result)) != NULL) {

						$id = $row['id'];
						$nombre = $row['nombre'];
						$mensaje = $row['mensaje'];
			
						$msj = base64_decode($mensaje);
					
					
					openssl_private_decrypt($msj, $mensajedescifrados, $llave);
					echo "<tr>
							<td class='active'>
								<center>$id</center>
							</td>
							<td class='active'>
								<center>$nombre</center>
							</td>
							<td class='active'>
								<center>$mensajedescifrados</center>
							</td>
						</tr>";
					}
				}else{
					echo "<h4>ERROR, la llave que haz ingresado es incorrecta</h4>";
				}
			} else {
				echo "<h4>Coloca una llave para mostrar los mensajes descifrados</h4>";
			}
		echo "</table>";
	}

	?>


	<!--Creación de la clase sticky cuando se haga scroll en el sitio-->
	<script type="text/javascript">
		window.addEventListener("scroll", function() {
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