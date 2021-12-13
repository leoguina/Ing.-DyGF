<?php 
	include('conexion.php');
	$usuario  = $_POST['usuario'];
	$contrasena = $_POST['password'];

	function cifrar($mensaje, $llave)
	{
		$inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
		$men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $inivec);

		return base64_encode($men_encriptado."::".$inivec);
	}

	function descifrar($mensaje, $llave)
	{
		list($datos_encriptados, $inivec) = explode('::', base64_decode($mensaje),2);

		return openssl_decrypt($datos_encriptados, 'AES-256-CBC', $llave, 0, $inivec);
	}

	$sql = mysqli_query($link,"SELECT username FROM gerente WHERE username = '$usuario'");
	$user = mysqli_fetch_row($sql);
	if($user>0){
		$sqlP = mysqli_query($link, "SELECT password FROM gerente WHERE username = '$user[0]'");
		$password = mysqli_fetch_row($sqlP);

		$llave = "Team2VLAE#";
		$cifrarContraseñaPeticion = cifrar($contrasena, $llave);

		$descifrarContraseña = descifrar($password[0], $llave);
		if ($descifrarContraseña == $contrasena) {

			/*$buscarEmpleado = mysqli_query($con, "SELECT empleados.id_empleado, empleados.nombre, empleados.apellido_paterno, empleados.apellido_materno, empleados.id_usuario, usuarios.id_usuario FROM empleados, usuarios WHERE empleados.id_empleado = usuarios.id_empleado AND usuarios.usuario = '$usuario'");
			$empleadoUsuario = mysqli_fetch_row($buscarEmpleado);

			session_start();
			$_SESSION['usuario'] = $_POST['usuario'];
			$_SESSION['id_usuario'] = $empleadoUsuario[5];
			$_SESSION['nombre'] = $empleadoUsuario[1].' '.$empleadoUsuario[2].' '.$empleadoUsuario[3];
			$_SESSION['tipoUsuario'] = $empleadoUsuario[4];
			$_SESSION['nombre2'] = $empleadoUsuario[1];

			if($_SESSION['tipoUsuario'] == 1){

				echo 1;
			}else{
				echo 4;
			}*/

			echo 1;
			
		}else{
			echo 2;
			echo $cifrarContraseñaPeticion;
		}

	}else{
		echo 3;
	}

 ?>
