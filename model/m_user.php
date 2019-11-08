<?php
include('../config/database.php');

function createUser($user,$password,$usertype,$status,$rut){
    global $cnx;
    $sql = "insert into user(alias,password,user_type,status,rut_client)";
    $sql .= "values('$user','$password','$usertype','$status','$rut')";

    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function createClient($rut,$name,$address,$phone,$codephone,$email){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into client(rut,name,address,phone,code,email,date)";
    $sql .= "values('$rut','$name','$address',$phone,'$codephone','$email','$fecha')";

    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function createDatabase($rut,$base){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into baseclient(rut_client,dbname)";
    $sql .= "values('$rut','$base')";

    if($cnx->query($sql) === true){
        //createClientDatabase($base);
        return 1;
    }else{
        return 0;
        //return 'problemas para crear base'.die(mysqli_erros());
        
    }
    $cnx->close();
}
function listClient(){
    global $cnx;
    $sql = "select c.rut,c.name,c.address,c.code,c.phone,c.email,u.alias,u.password,b.dbname,c.date from admclient.client c ";
    $sql .= "inner join admclient.user u on u.rut_client = c.rut ";
    $sql .= "inner join admclient.baseclient b on b.rut_client = c.rut ";
    $sql .= "where u.status = 0";

    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}
function updateClient(){}
function updateUser(){}
function disableUser(){}
function disableClient(){}
function createClientDatabase($base){
    global $cnx;
    $sql = "create database ".$base;
    $cnx->query($sql);
    $cnx->close();

    $dbnameCLient = $base;
    $dbuserClient = "root";
    $dbpasswordClient = "caschile";
    $dbhostClient = "localhost";

    $cnxClient = new mysqli($dbhostClient, $dbuserClient, $dbpasswordClient, $dbnameCLient);
    $sql = "create table prueba(
        id int
    )";
    $cnxClient->query($sql);
    $cnxClient->close();


}
?>