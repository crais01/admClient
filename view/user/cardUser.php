<?php 
$client = $_POST['client'];
foreach($client as $row)
{
?>
<form id="userform" name="userform" method="post">
<div class="container">
    <div class="row">
        <div class="col-6">
                <label for="name" class="h5">Nombre</label>
                <label><?php echo $row['name']; ?>"</label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="rut" class="h5">Rut</label>
            <label><?php echo $row['rut']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <label for="address" class="h5">Direccion</label>
                <label><?php echo $row['address']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <label for="emial" class="h5">Correo</label>
                <label><?php echo $row['email']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <label for="phone" class="h5">Numero Fijo</label>
                <label><?php echo $row['phone']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <label for="phone" class="h5">Celular</label>
                <label><?php echo $row['mobile']; ?></label>
        </div>
    </div>
    <div class="row">        
        <div class="col-6">
                <label for="user" class="h5">Usuario</label>
                <label><?php echo $row['alias']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">       
                <label for="password" class="h5">Contraseña</label>
                <label><?php echo $row['password']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
                <label for="base" class="h5">Nombre Base de Datos</label>
                <label><?php echo $row['dbname']; ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="button" id="send" name="send" value="volver" class="btn btn-success" />
        </div>
    </div>
</div>
</form>
<?php
}
?>
<script>
$(document).ready(function() {
	$("#send").click(function(event) {//document.getElementById('container').innerHTML='';
		$("#container").load("../../view/user/listUser.php", function(response, status, xhr) {
			if (status == "error") {
				var msg = "Error!, algo ha sucedido: ";
				$("#layout").html(msg + xhr.status + " " + xhr.statusText);
			}
		});
	});
});
</script>