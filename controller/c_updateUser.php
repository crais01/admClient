<?php
include('../model/m_user.php');

$rut = $_POST['rut'];
$user = $_POST['user'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$email = $_POST['email'];

$updateClient = updateClient($rut,$user,$password,$name,$phone,$mobile,$address,$email);
$updateUser = updateUser($rut,$user,$password);


?>
