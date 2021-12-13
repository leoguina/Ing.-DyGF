<?php
require_once ("conexion.php");
$nombre = $_POST['nombrecomp'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$keypublica = openssl_pkey_get_public(file_get_contents('publica.key'));

openssl_public_encrypt($mensaje, $mensajecifrado, $keypublica);
$mensaje= base64_encode($mensajecifrado);

$sql = "INSERT INTO mensajes(nombre, email, mensaje) 
    values('$nombre', '$email', '$mensaje')";

$consulta=mysqli_query($link,$sql);

  echo " 
  <script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='220801.html';
                }else{
                window.location.href='contacto.php';
                }
 </script>";
?>