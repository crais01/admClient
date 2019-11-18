<?php
include('../model/m_user.php');
error_reporting(E_ALL ^ E_NOTICE);

$listClient = listClient();

if(is_null($listClient)){
    echo "no existen registros";
}else{
    foreach($listClient as $row)
    {
    echo "<tr>";
    echo "<td>".$row['rut']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>+".$row['code'].$row['phone']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['alias']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['dbname']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "<td><input type='button' id='update' name='update' value='Actualizar' /></td>";
    echo "<td><input type='button' id='delete' name='delete' value='Eliminar' /></td>";
    echo "</tr>";
    echo "<input type='hidden' id='rut' name='rut' value='".$row['rut']."' />";
    }

}
//echo "<br><br><br><br>";
//var_dump($listClient);
?>
<script>
$(document).ready(function(){
  $("#delete").click(function(event) {
		
      var rutF = document.getElementById("rut").value;
      
     // alert(rutF);
      $("#container").load("../../controller/c_deleteUser.php",{rut:rutF}, function(response, status, xhr) {
         if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
         }
      });
   });
});

$(document).ready(function(){
  $("#update").click(function(event) {

      var clientF = <?php echo json_encode($listClient); ?>;
      //alert(clientF);
      $("#container").load("../../view/user/updateUser.php",{client:clientF}, function(response, status, xhr) {
         if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
         }
      });
   });
});
</script>
