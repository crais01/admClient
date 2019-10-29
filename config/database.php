<?php
$dbname = "admClient";
$dbuser = "root";
$dbpassword = "caschile";
$dbhost = "localhost";

$cnx = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
}

/*$sql = "create database baseprueba";

if (mysqli_query($cnx,$sql)) {
    echo "La base de datos mi_bd se creó correctamente\n";
} else {
    echo 'Error al crear la base de datos: ' . mysqli_error() . "\n";
}*/


    /*$sql .= "values('$user','$password','$usertype','$status')";
echo $sql;*/

?>