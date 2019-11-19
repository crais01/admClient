<?php
include('../config/database.php');

function disableClientDatabase($rut){
    global $cnx;
    $sql = "update baseclient set ";
    $sql .= "state = 1 ";
    $sql .= "where rut_client = '".$rut."'";
   
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function enableClientDatabase($rut){
    global $cnx;
    $sql = "update baseclient set ";
    $sql .= "state = 0 ";
    $sql .= "where rut_client = '".$rut."'";
   
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
    $sql = "insert into baseclient(rut_client,dbname,state)";
    $sql .= "values('$rut','$base',0)";

    if($cnx->query($sql) === true){
        //createClientDatabase($base);
        return 1;
    }else{
        return 0;
        //return 'problemas para crear base'.die(mysqli_erros());
        
    }
    $cnx->close();
}
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