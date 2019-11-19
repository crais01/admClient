<?php 
$client = $_POST['client'];
foreach($client as $row)
{
?>
<form id="userform" name="userform" action="<?=BASE_URL?>controller/c_createUser.php" method="post">
<div class="container">
<div id="contianerResult"></div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name" class="h5">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>"/>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="form-group">
            <label for="rut" class="h5">Rut</label>
                <div class="input-group">
                    <input type="text" id="rut" name="rut" maxlength="10" style="width:200px;" class="form-control" onblur="agregarCeros_onblur()" value="<?php echo $row['rut']; ?>" readonly/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="address" class="h5">Direccion</label>
                <input type="text" id="address" name="address" class="form-control" value="<?php echo $row['address']; ?>"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="emial" class="h5">Correo</label>
                <input type="input" id="email" name="email" class="form-control" placeholder="correo@correo.cl" value="<?php echo $row['email']; ?>"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="phone" class="h5">Numero</label>
                <input type="number" id="phone" name="phone" class="form-control" maxlength="11" placeholder="1324567" value="<?php echo $row['code'].$row['phone']; ?>"/>
            </div>
        </div>
    </div><br>
    <div class="row">        
        <div class="col-6">
            <div class="form-group">                        
                <label for="user" class="h5">Usuario</label>
                <input type="text" id="user" name="user" class="form-control" value="<?php echo $row['alias']; ?>"/>
            </div>
        </div>
        <div class="col-6">       
            <div class="form-group">
                <label for="password" class="h5">Contraseña</label>
                <input type="text" id="password" name="password" class="form-control" value="<?php echo $row['password']; ?>"/>
            </div>  
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="base" class="h5">Nombre Base de Datos</label>
                <input type="text" id="base" name="base" class="form-control" value="<?php echo $row['dbname']; ?>" readonly/>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <input type="button" id="send" name="send" value="modificar datos" class="btn btn-success" />
        </div>
    </div>
</div>
</form>
<?php
}
?>
<script>
$(document).ready(function() {
	$("#send").click(function(event) {
		alert("aqui");
        var rutF = document.userform.rut.value;
        var userF = document.userform.user.value;
        var passwordF = document.userform.password.value;
        var nameF = document.userform.name.value;
        var phoneF = document.userform.phone.value;
        var addressF = document.userform.address.value;
        var emailF = document.userform.email.value;

alert(passwordF);
        document.getElementById('contianerResult').innerHTML='';

		/*$("#contianerResult").load("../../controller/c_createUser.php",{rut:rutF, dv:dvF,user:userF,usertype:usertypeF,password:passwordF,status:statusF,name:nameF,codephone:codephoneF,phone:phoneF,address:addressF,email:emailF,base:baseF}, function(response, status, xhr) {
			if (status == "error") {
				var msg = "Error!, algo ha sucedido: ";
				$("#layout").html(msg + xhr.status + " " + xhr.statusText);
			}
		});*/
	});
});	

function agregarCeros_onblur() {
    var r = document.userform.rut.value;
	var a = 9 - document.userform.rut.value.length;
	for (var i=0;i< a;i++){
         r = "0" + r;
    }
    document.userform.rut.value = r;
	calcularDigitoVerificador()
                          
}
function calcularDigitoVerificador(){
	var srut = document.getElementById('rut').value;
	if (srut!=""){
		var M=0,S=1;var T = document.getElementById('rut').value;for(;T;T=Math.floor(T/10))
		S=(S+T%10*(9-M++%6))%11;document.getElementById('dv').value=S?S-1:'k';
	}
			
}
</script>