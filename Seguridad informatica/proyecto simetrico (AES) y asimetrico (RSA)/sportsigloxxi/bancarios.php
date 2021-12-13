<?php
require_once ("conexion.php");
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$tarjeta= $_POST['tarjeta'];
$expiracion = $_POST['expiracion'];
$codigo = $_POST['codigo'];

function cifrar ($mensaje, $llave) //Funcion para cifrar el mensaje 
{
    $inivec = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC')); //Vector de inicializacion para generar el cifrado
    $men_encriptado = openssl_encrypt($mensaje, "AES-256-CBC", $llave, 0, $inivec); //metodo para cifrar la información

    return base64_encode($men_encriptado."::".$inivec); //regresa el mensaje cifrado 
}

$llave = "Team2VLAE#$#";

$tarjetacifrado = cifrar($tarjeta, $llave);
$expiracioncifrado = cifrar($expiracion, $llave);
$codigocifrado = cifrar($codigo, $llave);

$sql = "INSERT INTO bancarios(nombre, apellidos, tarjeta, expiracion, codigo) 
    values('$nombre', '$apellidos', '$tarjetacifrado', '$expiracioncifrado', '$codigocifrado')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='220801.html';
                }else{
                window.location.href='compras.php';
                }
 </script>";
?>