<?php
include('../config/database.php');

function createUser($user,$password,$usertype,$status){
    global $cnx;
    $sql = "insert into user(alias,password,user_type,status)";
    $sql .= "values('$user','$password','$usertype','$status')";

    if($cnx->query($sql) === true){
        return 'cuenta de usuario creada';
    }else{
        return 'problemas para crear la cuenta'.die(mysqli_erros());
    }
}
function createClient($name,$address,$phone,$codephone,$user){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into client(name,address,phone,code,date,id_user)";
    $sql .= "values('$name','$address',$phone,'$codephone','$fecha','$user')";

    if($cnx->query($sql) === true){
        return 'Cliente creado exitosamente';
    }else{
        return 'problemas paracrear cliente'.die(mysqli_erros());
    }
}
function createDatabase(){}
function updateClient(){}
function updateUser(){}
function disableUser(){}
function disableClient(){}
?>