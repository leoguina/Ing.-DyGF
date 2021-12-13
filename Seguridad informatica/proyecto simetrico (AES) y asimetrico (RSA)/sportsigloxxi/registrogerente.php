<?php
require_once ("conexion.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fecha_nac = $_POST['nacimiento'];
$direccion = $_POST['direccion'];
$username = $_POST['username'];
$pass = $_POST['password'];

function cifrar ($mensaje, $llave) //Funcion para cifrar el mensaje 
{
    $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC')); //Vector de inicializacion para generar el cifrado
    $men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $inivec); //metodo para cifrar la información

    return base64_encode($men_encriptado."::".$inivec); //regresa el mensaje cifrado 
}

$llave = "Team2VLAE#";

$passcifrado = cifrar($pass, $llave);


$sql = "INSERT INTO gerente(nombre, apellido, correo, telefono, fecha_nac, direccion, username, password) 
    values('$nombre', '$apellidos', '$correo', '$telefono', '$fecha_nac', '$direccion', '$username', '$passcifrado')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='220801.html';
                }else{
                window.location.href='registrarse.php';
                }
 </script>";
?>