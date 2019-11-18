<?php
include('../model/m_user.php');
include('../model/m_database.php');
error_reporting(E_ALL ^ E_NOTICE);

//$listClient = listClient();

$rut = $_POST['rut'];
$deleteUser = disableUser($rut);
$deleteBase = disableClientDatabase($rut);

if($deleteUser == 1 and  $deleteBase == 1){
    echo "<div class='alert alert-success'>";
    echo "Cliente eliminado correctamente, base de datos desactivada";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "Problemas para eliminar el usuario";
    echo "</div>";   
}
?>
<script>
setTimeout("location.href = '../../view/user/listUser.php';", 1500);
</script>