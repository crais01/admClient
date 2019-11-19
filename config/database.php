<?php
$dbname = "admclient";
$dbuser = "root";
$dbpassword = "";
$dbhost = "localhost";

$cnx = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($cnx->connect_error) {
    die("Connection failed: " . $cnx->connect_error);
}

?>