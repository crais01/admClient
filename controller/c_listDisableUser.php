<?php
include('../model/m_user.php');
error_reporting(E_ALL ^ E_NOTICE);

$listClient = listDisableClient();

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
    echo "<td><input type='button' id='enableUser' name='enableUser' value='activar' /></td>";
    echo "</tr>";
    echo "<input type='hidden' id='rut' name='rut' value='".$row['rut']."' />";
    }

}
//echo "<br><br><br><br>";
//var_dump($listClient);
?>
<script>
$(document).ready(function(){
  $("#enableUser").click(function(event) {
		
      var rutF = document.getElementById("rut").value;
      alert(rutF);
      $("#container").load("../../controller/c_enableUser.php",{rut:rutF}, function(response, status, xhr) {
         if (status == "error") {
            var msg = "Error!, algo ha sucedido: ";
            $("#container").html(msg + xhr.status + " " + xhr.statusText);
         }
      });
   });
});
</script>
