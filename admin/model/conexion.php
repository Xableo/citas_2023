<?php
#propiedades de host
$pass='123456789';
$user = 'root';
$namedb = 'citas';

try {
    $db = new PDO(
        'mysql:host=localhost;dbname='.$namedb, $user, $pass
    );
   # echo 'Exito';
} catch (Exception $error) {
    echo 'error conexion'.$error->getMessage();
    die();
}