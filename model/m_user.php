<?php
include('../config/database.php');

function createUser($user,$password,$usertype,$state,$rut){
    global $cnx;
    $sql = "insert into user(alias,password,user_type,state,rut_client)
            values('$user','$password','$usertype','$state','$rut')";

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
    $sql = "insert into client(rut,name,address,phone,mobile,email,date)
            values('$rut','$name','$address',$phone,'$mobile','$email','$fecha')";

    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function listClient(){
    global $cnx;
    $sql = "select c.rut,c.name,c.address,c.mobile,c.phone,c.email,u.alias,u.password,b.dbname,c.date from admclient.client c 
            inner join admclient.user u on u.rut_client = c.rut 
            inner join admclient.baseclient b on b.rut_client = c.rut 
            where u.state = 0";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}
function listDisableClient(){
    global $cnx;
    $sql = "select c.rut,c.name,c.address,c.mobile,c.phone,c.email,u.alias,u.password,b.dbname,c.date from admclient.client c 
            inner join admclient.user u on u.rut_client = c.rut     
            inner join admclient.baseclient b on b.rut_client = c.rut   
            where u.state = 1";

    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}
function disableUser($rut){
    global $cnx;
    $sql = "update user set
            state = 1
            where rut_client = '$rut'";
    
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function enableUser($rut){
    global $cnx;
    $sql = "update user set 
            state = 0 
            where rut_client = '$rut'";
    
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function updateClient($rut,$name,$phone,$mobile,$address,$email){
    global $cnx;
    $sql = "update client set
            name = '$name',
            address = '$address',
            phone = '$phone',
            mobile = '$mobile',
            email = '$email'
            where rut = '$rut'";
    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}
function updateUser($rut,$user,$password){
    global $cnx;
    $sql = "update user set
            alias = '$user',
            password = '$password'
            where rut_client = '$rut'";
    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;        
    }
    $cnx->close();
}

?>