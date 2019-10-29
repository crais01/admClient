<?php include('../header.php'); ?>
<form id="userform" action="#" method="post">
<div class="container">

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
                <label for="name" class="h5">Nombre</label>
                <input type="text" id="name" name="name" class="form-control"/>
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
                <label for="codephone" class="h5">Tipo Telefono</label>
                <select name="codephone" id="codephone" class="form-control">
                    <option value="52">Telefono Fijo</option>
                    <option value="56">Telefono Movil</option>
                </select>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="phono" class="h5">Numero</label>
                <input type="text" id="phone" name="phone" class="form-control"/>
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
            <input type="button" value="crear usuario" class="btn btn-success" />
        </div>
    </div>
</div>
</form>
<?php include('../footer.php'); ?>