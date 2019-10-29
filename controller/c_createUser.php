<?php
include('../model/m_user.php');

echo "estoy en el controlador";
$user = $_POST['user'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$status = $_POST['status'];
$name = $_POST['name'];
$codephone = $_POST['codephone'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$base = $_POST['base'];

echo $user."<br>";
echo $password."<br>";
echo $usertype."<br>";
echo $status."<br>";
echo $name."<br>";
echo $codephone."<br>";
echo $phone."<br>";
echo $address."<br>";
echo $base."<br>";

$createUser = createUser($user,$password,$usertype,$status);
echo $createUser;
?>