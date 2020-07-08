@extends('welcome2')
@section('contenido')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/account">Account</a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=account/login">Login</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-md-9 col-sm-12 fluid-sidebar">
            <div class="row">
                <div class="col-sm-6">
                    <div class="well ">
                        <h2>Nueva cuenta</h2>
                        <p><strong>Registrar otra cuenta</strong></p>
                        <p>Disfruta del servicio de linea registrandote en nuestra plataforma.</p>
                        <a href="/registrarse" class="btn btn-primary">Continue</a>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="well col-sm-12">

                        <h2>Iniciar sesión</h2>
                        
                         <form action={{route('login')}} method="POST" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label class="control-label" for="input-email">Correo electronico</label>
                                <input type="email" name="correo" value="" placeholder="Correo Electronico" id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-password">Contraseña</label>
                                <input type="password" name="password" value="" placeholder="Contraseña" id="password" class="form-control" required>
                                <a href="/recuperar_contrasenia">Recuperar contraseña</a>
                             </div>

                            <input type="submit" value="Login" class="btn btn-primary pull-left">
                        </form>

                        <column id="column-login" class="col-sm-8 pull-right">
                            <div class="row">

                                <div class="social_login pull-right" id="so_sociallogin">
                                    <a href="https://www.facebook.com/v2.4/dialog/oauth?client_id=442675926063537&amp;state=fad5cd9413495901e1fad72ec319fa6d&amp;response_type=code&amp;sdk=php-sdk-5.5.0&amp;redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_megastore%2Flayout2%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FFacebookLogin&amp;scope=public_profile%2Cemail" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/module/so_sociallogin/TwitterLogin" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                    <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=https%3A%2F%2Fopencart.opencartworks.com%2Fthemes%2Fso_megastore%2Flayout2%2Findex.php%3Froute%3Dextension%2Fmodule%2Fso_sociallogin%2FGoogleLogin&amp;client_id=21690390667-tco9t3ca2o89d3sshkb2fmppoioq5mfq.apps.googleusercontent.com&amp;scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&amp;access_type=offline&amp;approval_prompt=force" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                    <a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=extension/module/so_sociallogin/LinkedinLogin" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </column>

                    </div>
                </div>
            </div>
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
