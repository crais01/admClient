<?php
include('../model/m_user.php');
include('../model/m_database.php');
error_reporting(E_ALL ^ E_NOTICE);

//$listClient = listClient();

$rut = $_POST['rut'];
$deleteUser = enableUser($rut);
$deleteBase = enableClientDatabase($rut);

if($deleteUser == 1 and  $deleteBase == 1){
    echo "<div class='alert alert-success'>";
    echo "Cliente habilitado correctamente, base de datos activada";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "Problemas para activar el usuario";
    echo "</div>";   
}
?>
<script>
setTimeout("location.href = '../../view/user/listDisableUser.php';", 1500);
</script>