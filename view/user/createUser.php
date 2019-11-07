<?php include('../header.php'); ?>

<form id="userform" name="userform" action="<?=BASE_URL?>controller/c_createUser.php" method="post">
<div class="container">
<div id="contianerResult"></div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name" class="h5">Nombre</label>
                <input type="text" id="name" name="name" class="form-control"/>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="form-group">
            <label for="rut" class="h5">Rut</label>
                <div class="input-group">
                    <input type="text" id="rut" name="rut" maxlength="10" style="width:200px;" class="form-control" onblur="agregarCeros_onblur()"/>
                    <input type="text" id="dv" name="dv" maxlength="1" style="width:5px;" class="form-control" onblur='return calcularDigitoVerificador()'/>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="address" class="h5">Direccion</label>
                <input type="text" id="address" name="address" class="form-control"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="emial" class="h5">Correo</label>
                <input type="text" id="email" name="email" class="form-control"/>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="codephone" class="h5">Tipo Telefono</label>
                <select name="codephone" id="codephone" class="form-control">
                    <option value="52">Telefono Fijo</option>
                    <option value="56">Telefono Movil</option>
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="phone" class="h5">Numero</label>
                <input type="text" id="phone" name="phone" class="form-control"/>
            </div>
        </div>
    </div><br>
    <div class="row">        
        <div class="col-6">
            <div class="form-group">
                <label for="user" class="h5">Usuario</label>
                <input type="text" id="user" name="user" class="form-control"/>
            </div>
        </div>
        <div class="col-6">       
            <div class="form-group">
                <label for="password" class="h5">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control"/>
            </div>  
        </div>
        <div class="col-6">     
            <div class="form-group">
                <label for="usertype" class="h5">Tipo Usuario</label>
                <select name="usertype" id="usertype" class="form-control">
                    <option value="0">Super Admin</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
        </div>
        <div class="col-6">     
            <div class="form-group">
                <label for="status" class="h5">Estado</label>
                <select name="status" id="status" class="form-control">
                    <option value="0">Activo</option>
                    <option value="1">Inactivo</option>
                </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="base" class="h5">Nombre Base de Datos</label>
                <input type="text" id="base" name="base" class="form-control"/>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <input type="button" id="send" name="send" value="crear usuario" class="btn btn-success" />
        </div>
    </div>
</div>
</form>
<?php include('../footer.php'); ?>
<script>
$(document).ready(function() {
	$("#send").click(function(event) {
		alert("aqui");
        var rutF = document.userform.rut.value;
        var dvF = document.userform.dv.value;
        var userF = document.userform.user.value;
        var usertypeF = document.userform.usertype.value;
        var passwordF = document.userform.password.value;
        var statusF = document.userform.status.value;
        var nameF = document.userform.name.value;
        var codephoneF = document.userform.codephone.value;
        var phoneF = document.userform.phone.value;
        var addressF = document.userform.address.value;
        var emailF = document.userform.email.value;
        var baseF = document.userform.base.value;

		$("#contianerResult").load("../../controller/c_createUser.php",{rut:rutF, dv:dvF,user:userF,usertype:usertypeF,password:passwordF,status:statusF,name:nameF,codephone:codephoneF,phone:phoneF,address:addressF,email:emailF,base:baseF}, function(response, status, xhr) {
			if (status == "error") {
				var msg = "Error!, algo ha sucedido: ";
				$("#layout").html(msg + xhr.status + " " + xhr.statusText);
			}
		});
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