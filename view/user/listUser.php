<?php include('../header.php'); ?>
<div id="container" class="container">
   <table class="table table-sm table-striped">
   <thead>
   <tr class="table-info">
    <th scope="col">RUT</th>
    <th scope="col">NOMBRE</th>
    <th scope="col">USUARIO</th>
    <th scope="col">BASE DE DATOS</th>
    <th scope="col">FECHA CREACION</th>
    <th></th>
    <th></th>
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