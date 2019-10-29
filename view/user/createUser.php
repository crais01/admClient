<?php include('../header.php'); ?>
<form id="userform" action="#" method="post">
<div class="container">
    <label for="user">Usuario</label>
    <input type="text" id="user" name="user" />
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" />
    <label for="usertype">Tipo Usuario</label>
    <select name="usertype" id="usertype">
        <option value="0">Super Admin</option>
        <option value="1">Administrador</option>
    </select>
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" />
    <label for="address">Direccion</label>
    <input type="text" id="address" name="address" />
    <label for="phone">Telefono</label>
    <select name="codephone" id="codephone">
        <option value="0">+56</option>
        <option value="1">+52</option>
    </select>
    <input type="text" id="phone" name="phone" />
    <label for="base">Nombre Base de Datos</label>
    <input type="text" id="base" name="base" />
</div>
</form>
<?php include('../footer.php'); ?>