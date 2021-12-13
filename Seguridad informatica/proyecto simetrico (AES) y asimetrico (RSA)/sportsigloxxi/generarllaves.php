<?php

$configargs = array(
    "config" => "C:/xampp/php/extras/openssl/openssl.cnf", //argumentos para generar las llaves
    "private_key_bits" => 2048,
    "default_md" => "sha256",
);

$generar = openssl_pkey_new($configargs); //creación de las dos llaves 

openssl_pkey_export($generar, $keypriv, NULL, $configargs); //exporta el contenido de la llave primaria a la variable $keypriv

$keypub = openssl_pkey_get_details($generar); //obtiene los detalles de la llave para generar la llave publica

file_put_contents('privada.key', $keypriv); //crea el archivo .key de la llave privada
file_put_contents('publica.key', $keypub['key']); //crea el archivo .key de la llave publica

echo "<br/> LAS LLAVES SE CREARON CORRECTAMENTE"

?>