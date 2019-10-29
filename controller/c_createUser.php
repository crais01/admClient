<?php
include('../model/m_user.php');
$user = $_POST['user'];
$rut = $_POST['rut'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$status = $_POST['status'];
$name = $_POST['name'];
$codephone = $_POST['codephone'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$base = $_POST['base'];

$createUser = createUser($user,$password,$usertype,$status);
$createClient = createClient($name,$address,$phone,$codephone,$user);
echo $createUser;
echo "<br>".$createClient;
?>