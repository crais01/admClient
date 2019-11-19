<?php
include('../config/database.php');

function createUser($user,$password,$usertype,$state,$rut){
    global $cnx;
    $sql = "insert into user(alias,password,user_type,state,rut_client)";
    $sql .= "values('$user','$password','$usertype','$state','$rut')";

    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function createClient($rut,$name,$address,$phone,$mobile,$email){
    global $cnx;
    $fecha = date("Y-m-d H:i:s");
    $sql = "insert into client(rut,name,address,phone,mobile,email,date)";
    $sql .= "values('$rut','$name','$address',$phone,'$mobile','$email','$fecha')";

    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function listClient(){
    global $cnx;
    $sql = "select c.rut,c.name,c.address,c.mobile,c.phone,c.email,u.alias,u.password,b.dbname,c.date from admclient.client c ";
    $sql .= "inner join admclient.user u on u.rut_client = c.rut ";
    $sql .= "inner join admclient.baseclient b on b.rut_client = c.rut ";
    $sql .= "where u.state = 0";

    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}
function listDisableClient(){
    global $cnx;
    $sql = "select c.rut,c.name,c.address,c.mobile,c.phone,c.email,u.alias,u.password,b.dbname,c.date from admclient.client c ";
    $sql .= "inner join admclient.user u on u.rut_client = c.rut ";
    $sql .= "inner join admclient.baseclient b on b.rut_client = c.rut ";
    $sql .= "where u.state = 1";

    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}
function disableUser($rut){
    global $cnx;
    $sql = "update user set ";
    $sql .= "state = 1 ";
    $sql .= "where rut_client = '".$rut."'";
    
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function enableUser($rut){
    global $cnx;
    $sql = "update user set ";
    $sql .= "state = 0 ";
    $sql .= "where rut_client = '".$rut."'";
    
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function updateClient($rut,$name,$phone,$mobile,$address,$email){
    global $cnx;
    $sql = "update user set ";
    $sql .= "state = 1 ";
    $sql .= "where rut_client = '".$rut."'";
    
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function updateUser($rut,$user,$passwords){}

?>