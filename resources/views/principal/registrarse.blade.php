@extends('welcome2')
@section('contenido')
<div id="account-register" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/registrarse">Registrarse</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Formulario de registro</h1>
            <p>Si ya tienes una cuenta con nostros solo  <a href="/iniciar_sesion">Inicia sesión</a>.</p>
            <form action={{route('registro')}} method="POST" enctype="multipart/form-data" class="form-horizontal">
                
                {{ csrf_field() }}
                <fieldset id="account">
                    <legend>Datos Personales</legend>
                    
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname">Nombres(s)</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="" placeholder="Nombre(s)" id="nombre" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" name="apellidos" value="" placeholder="Apellidos" id="apellidos" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">Sexo</label>
                        <div class="col-sm-10">
                           <!-- <input type="email" name="telefono" value="" placeholder="Telefono" id="telefono" class="form-control">-->
                            <select class="form-control" id="sexo" required="" name="sexo" required>
                                           
                            <option value="M"> Hombre </option>
                             <option value="F"> Mujer </option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">Telefono</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="" placeholder="Telefono" id="telefono" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-telephone">Fecha de nacimiento</label>
                        <div class="col-sm-10">
                            <input type="date" name="fecha_nacimiento"   id="fecha_nacimiento" class="form-control" required>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Datos de la cuenta</legend>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Correo electronico</label>
                        <div class="col-sm-10">
                            <input type="email" name="correo" value="" placeholder="Correo electronico" id="correo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-password">Nombre de usuario</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre_usuario" value="" placeholder="Nombre de usuario" id="nombre_usuario" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-confirm">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" name="contraseña" value="" placeholder="****" id="contraseña" class="form-control" required>
                        </div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" value="Continuar" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
            <span id="close-sidebar" class="fa fa-times"></span>

            <div class="list-group">
                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/login" class="list-group-item">Login</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/register" class="list-group-item">Register</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/forgotten" class="list-group-item">Forgotten Password</a>
                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/account" class="list-group-item">My Account</a>
                <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/address" class="list-group-item">Address Book</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/wishlist" class="list-group-item">Wish List</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/order" class="list-group-item">Order History</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/download" class="list-group-item">Downloads</a><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/recurring" class="list-group-item">Recurring payments</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/reward" class="list-group-item">Reward Points</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/return" class="list-group-item">Returns</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/transaction" class="list-group-item">Transactions</a> <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/newsletter" class="list-group-item">Newsletter</a>
            </div>

        </aside>
    </div>
</div>
@stop
