<?php
include('../model/m_user.php');
error_reporting(E_ALL ^ E_NOTICE);
$user = $_POST['user'];
$rut = $_POST['rut']."-".$_POST['dv'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$status = $_POST['status'];
$name = $_POST['name'];
$codephone = $_POST['codephone'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$base = $_POST['base'];


if(empty($rut) || empty($_POST['dv'])){
    echo "debe ingresar rut";
    return;
}
if(empty($user)){
    echo "debe ingresar un nombre de ususario";
    return;
}
if(empty($password)){
    echo "debe ingresar la contraseña";
    return;
}
if(empty($name)){
    echo "debe ingresar el nombre del cliente";
    return;
}
if(empty($phone)){
    echo "debe ingresar un numero de telefono";
    return;
}
if(empty($address)){
    echo "debe ingresar la direccion del cliente";
    return;
}
if(empty($email)){
    echo "debe ingresar un correo electronico valido";
    return;
}
if(empty($base)){
    echo "debe ingresar nombre para crear la base de datos";
    return;
}
$createClient = createClient($rut,$name,$address,$phone,$codephone,$email);
$createUser = createUser($user,$password,$usertype,$status,$rut);
$createBase = createDatabase($rut,$base);

echo $createClient;
echo "<br>".$createUser;
echo "<br>".$createBase;
?>