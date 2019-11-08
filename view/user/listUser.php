<?php include('../header.php'); ?>

<div class="container">
   <table>
   <thead>
   <tr>
    <td>RUT</td>
    <td>NOMBRE</td>
    <td>DIRECCION</td>
    <td>TELEFONO</td>
    <td>CORREO</td>
    <td>USUARIO</td>
    <td>CONTRASEÑA</td>
    <td>BASE DE DATOS</td>
    <td>FECHA CREACION</td>
   </tr>
   </thead>
   <tbody id="contianerResult">
   </tbody>
   </table>
   
</div>
<?php include('../footer.php'); ?>
<script>
$(document).ready(function() {
		$("#contianerResult").load("../../controller/c_listUser.php", function(response, status, xhr) {
			if (status == "error") {
				var msg = "Error!, algo ha sucedido: ";
				$("#contianerResult").html(msg + xhr.status + " " + xhr.statusText);
			}
		});
});
</script>