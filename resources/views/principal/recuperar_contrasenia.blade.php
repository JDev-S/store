@extends('welcome2')
@section('contenido')
<div id="account-forgotten" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/recuperar_contrasenia">Olvide mi contraseña</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-9">
            <h1>Olvide mi contraseña!!</h1>
            <p>Escribe tu corre electronico se te enviara un correo, Nota(checar tu email en correo no deseado) la contraseña que se te dara sera para que puedas acceder y luego podras cambiarla.</p>

            <form action={{route('obtener_contrasenia')}} method="POST" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-email">Correo electronico</label>
                        <div class="col-sm-10">
                            <input type="email" name="correo" value="" placeholder="Correo electronico" id="correo" class="form-control">
                        </div>
                    </div>
                </fieldset>
                <div class="buttons clearfix">
                    <div class="pull-left"><a href="/iniciar_sesion">Iniciar sesion</a></div>
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
