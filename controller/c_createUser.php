<?php
include('../model/m_user.php');
include('../model/m_database.php');
error_reporting(E_ALL ^ E_NOTICE);
$user = $_POST['user'];
$rut = $_POST['rut']."-".$_POST['dv'];
$password = $_POST['password'];
$usertype = $_POST['usertype'];
$state = $_POST['state'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
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
if(empty($phone) or empty($mobile)){
    echo "debe ingresar numero fijo o celular";
    return;
}elseif($phone == 562){
    $phone = 0;
}elseif($phone == 569){
    $phone = 0;
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
$createClient = createClient($rut,$name,$address,$phone,$mobile,$email);
$createUser = createUser($user,$password,$usertype,$state,$rut);
$createBase = createDatabase($rut,$base);

if($createClient == 1){
    echo "<div class='alert alert-success'>";
    echo "La informacion de cliente fue ingresada correctamente";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "Hubo problemas al realizar grabar la informacion de cliente";
    echo "</div>";   
}
if($createUser == 1){
    echo "<div class='alert alert-success'>";
    echo "Cuenta de usuario administrador para el cliente se creo correctamente";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "Problemas para crear la cuenta de usuario";
    echo "</div>";
}
if($createBase == 1){
    echo "<div class='alert alert-success'>";
    echo "la base de datos del cliente se creo correctamente";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "Problemas para crear base de datos";
    echo "</div>";
}
?>