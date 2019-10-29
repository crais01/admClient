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


?>