<?php
include('../config/database.php');

function createUser($user,$password,$usertype,$status,$rut){
    global $cnx;
    $sql = "insert into user(alias,password,user_type,status,rut_client)";
    $sql .= "values('$user','$password','$usertype','$status','$rut')";

    if($cnx->query($sql) === true){
        return 'cuenta de usuario creada';
    }else{
        return 'problemas para crear la cuenta'.die(mysqli_erros());
    }
}
function createClient($rut,$name,$address,$phone,$codephone,$email){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into client(rut,name,address,phone,code,email,date)";
    $sql .= "values('$rut','$name','$address',$phone,'$codephone','$email','$fecha')";

    if($cnx->query($sql) === true){
        return 'Cliente creado exitosamente';
    }else{
        return 'problemas paracrear cliente'.die(mysqli_erros());
    }
}
function createDatabase($rut,$base){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into baseclient(rut_client,dbname)";
    $sql .= "values('$rut','$base')";

    if($cnx->query($sql) === true){
        createClientDatabase($base);
        return 'Base creado exitosamente';
    }else{
        return 'problemas paracrear base'.die(mysqli_erros());
    }
}
function updateClient(){}
function updateUser(){}
function disableUser(){}
function disableClient(){}
function createClientDatabase($base){
    global $cnx;
    $sql = "create database ".$base;
    $cnx->query($sql);
    


}
?>