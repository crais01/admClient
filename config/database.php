<?php
$dbname = "admClient";
$dbuser = "root";
$dbpassword = "caschile";
$dbhost = "localhost";

$cnx = mysqli_connect($dbhost, $dbuser, $dbpassword);
if (!$cnx) {
    die('No pudo conectarse: ' . mysqli_error());
}else{
    echo "conectado";
}

$sql = "create database baseprueba";

if (mysqli_query($cnx,$sql)) {
    echo "La base de datos mi_bd se creó correctamente\n";
} else {
    echo 'Error al crear la base de datos: ' . mysqli_error() . "\n";
}
?>