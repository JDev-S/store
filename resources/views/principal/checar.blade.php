@extends('welcome2')
@section('metas')
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
@stop
@section('contenido')
@section('styles')
<link rel="stylesheet" href="/catalog/view/javascript/so_onepagecheckout/css/so_onepagecheckout.css">
<style>
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }

    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
        }
    }

</style>
@stop

<div class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/carrito_compra">Carrito de compras</a></li>
        <li><a href="/checar">Proceder a pagar</a></li>
    </ul>
    <div class="row">

        <div id="content" class="col-sm-12">

            <h1>Proceder a pagar</h1>
            <div class="so-onepagecheckout layout1 ">
                <div class="col-left col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="checkout-content checkout-register">
                        <fieldset id="address">
                            <h2 class="secondary-title"><i class="fa fa-map-marker"></i>Dirección
                            </h2>
                            <br>
                            <div class="">

                                <div style="display: block">
                                    
                                    
                                    <div class="form-group company-input">
                                        <input type="text" name="persona_recibe" id="persona_recibe" class="form-control" value="Recibe :{{$direcciones[0]->persona_recibe}}"  disabled/>
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="{{$direcciones[0]->id_usuario}}" required>
                                        <input type="hidden" name="id_direccion" id="id_direccion" value="{{$direcciones[0]->id_direccion}}" required>
                                    </div>
                                    
                                    <div class="form-group required">
                                        <input type="text" name="colonia" value=" Colonia :{{$direcciones[0]->colonia}}"  id="colonia" class="form-control" disabled />
                                    </div>

                                    <div class="form-group address-2-input">
                                        <input type="text" name="calle" value="Calle :{{$direcciones[0]->calle}}" placeholder="Calle"  class="form-control" disabled />
                                    </div>

                                    <div class="form-group required">
                                        <input type="text" name="numero_interior" value=" No. interior :{{$direcciones[0]->numero_interior}}"  id="numero_interior" class="form-control" disabled />
                                    </div>

                                    <div class="form-group required">
                                        <input type="text" name="numero_exterior" value=" No. exterior :{{$direcciones[0]->numero_exterior}}"  id="numero_exterior" class="form-control" disabled />
                                    </div>


                                    <div class="form-group address-2-input">
                                        <input type="text" name="cp" value="CP : {{$direcciones[0]->cp}}"  id="cp" class="form-control" disabled />
                                    </div>

                                    <div class="form-group required">

                                        <textarea name="referencia" id="referencia"  rows="4" cols="50" disabled>Referencias: {{$direcciones[0]->referencia}}</textarea>
                                    </div>

                                    <div class="form-group required">
                                        <input type="text" name="calleA" value="Calle A :{{ $direcciones[0]->calleA}}"  id="calleA" class="form-control" disabled />
                                    </div>

                                    <div class="form-group required">
                                        <input type="text" name="calleB" value="Calle B :{{ $direcciones[0]->calleB}}" id="calleB" class="form-control" disabled />
                                    </div>

                                    <div class="form-group required">
                                        <input type="text" name="telefono" value="Telefono : {{$direcciones[0]->telefono}}" id="telefono" class="form-control" disabled />
                                    </div>

                                </div>

                            </div>

                        </fieldset>

                    </div>
                </div>

                <div class="col-right col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <section class="section-right">

                        <div class="checkout-content checkout-cart">
                            <h2 class="secondary-title"><i class="fa fa-shopping-cart"></i>Carrito de compras </h2>
                            <div class="box-inner">
                                <div class="table-responsive checkout-product">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-left name" colspan="2">Nombre del producto</th>
                                                <th class="text-center quantity">Cantidad </th>
                                                <th class="text-center price">Precio unitario</th>
                                                <th class="text-right total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($carrito_compras as $carrito)
                                            <tr>
                                                <td class="text-left name" colspan="2">
                                                    <img data-sizes="auto" src="{{$carrito->fotografia_miniatura}}" alt="{{$carrito->fotografia_miniatura}}" title="{{$carrito->fotografia_miniatura}}" class="img-thumbnail lazyautosizes lazyloaded" sizes="80px" height="100px" width="100px">

                                                    {{$carrito->nombre_alimento}}
                                                    <br>
                                                    <input type="hidden" id="id_usuario" name="id_usuario" value='{{$carrito->id_usuario}}'>
                                                </td>
                                                <td class="text-left quantity">
                                                    <div class="input-group">
                                                        <input type="text" name="quantity[291]" value="{{$carrito->cantidad}}" size="1" disabled>
                                                    </div>
                                                </td>
                                                <td class="text-right price">${{$carrito->precio}}</td>
                                                <td class="text-right total">${{$carrito->precio * $carrito->cantidad}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="text-left">Sub-Total:</td>
                                                <td class="text-right">${{$totales[0]->total}}</td>
                                                <input type="hidden" id="total" name="total" value="{{$totales[0]->total}}">
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-left">Costo de envio:</td>
                                                <td class="text-right">$0.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-left">Total:</td>
                                                <td class="text-right">${{$totales[0]->total + 0.00}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-left">
                        <div class="ship-payment">

                            <div class="checkout-content checkout-payment-methods">
                                <h2 class="secondary-title"><i class="fa fa-credit-card"></i>Metodos de pago</h2>
                                <div class="box-inner">

                                    <div class="radio">
                                        <label>
                                            Mercado Pago
                                            <form action={{route('pago_por_mercado')}} method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id_direccion" id="id_direccion" value="{{$id_direccion}}">
                                                <input type="hidden" name="id_usuario" id="id_usuario" value="{{$direcciones[0]->id_usuario}}">
                                                <input type="hidden" id="total" name="total" value="{{$totales[0]->total}}">
                                                <input type="hidden" id="id_metodo" name="id_metodo" value="4">
                                                <script src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js" data-preference-id="<?php echo $preference->id; ?>">
                                                </script>
                                            </form>
                                        </label>
                                        <label>
                                            Paypal
                                            <div id="paypal-button-container"></div>

                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section>
                    <!--<a class="btn btn-primary " onclick="comprar()">Confirmar orden</a>-->

                </div>
            </div>

        </div>
    </div>
</div>
@section('scripts')

<script src="https://www.paypal.com/sdk/js?client-id=AXOxIUpdCZugq_EOM5jdRg_stGm_CWGxrYW6VcYYhif4eqqXO0CXjfUErsJ2a3KBBAWwXsg_sziagYnB&currency=MXN">
</script>

<script>
    // RENDERIZAR EL BOTON DE PAYPAL
    paypal.Buttons({

        // CONFIGURAR TRANSACCION
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [
                    JSON.parse(@json($items))
                ]
            });
        },
        // FINALIZAR TRANSACCION    
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details);
                // MOSTRAR MENSAJE CUANDO SE HAGA EL PAGO CORRECTAMENTE
                
                var id_usuario = document.getElementById('id_usuario').value;
                var total = document.getElementById('total').value;
                var id_direccion = document.getElementById('id_direccion').value;
                var id_metodo=3;
                var token = '{{csrf_token()}}';
                var data = {
                id_usuario: id_usuario,
                id_direccion: id_direccion,
                id_metodo: id_metodo,
                total: total,
                _token: token
                };
                
                $.ajax({
                type: "POST",
                url: "/pagar_paypal",
                data: data,
                success: function(msg) {
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                }
                });
                
            });
        }
    }).render('#paypal-button-container');

</script>

<script>
    function comprar() {
        alert("entro al metodo de comprar");

        var memo = document.getElementsByName('direccion');
        var pago = document.getElementsByName('metodo');
        var id_direccion = "";
        var id_metodo = "";
        for (i = 0; i < memo.length; i++) {
            if (memo[i].checked) {
                id_direccion = memo[i].value;
            }
        }

        for (i = 0; i < pago.length; i++) {
            if (pago[i].checked) {
                id_metodo = pago[i].value;
            }
        }

        if (id_metodo == '4' && id_direccion != "") {

        }
        /*if (id_direccion != "") {
        alert("ID DE DIRECCION" + id_direccion);
        if (id_metodo != "") {
        alert("ID de pago" + id_metodo);
        var id_usuario = document.getElementById('id_usuario').value;
        var total = document.getElementById('total').value;
        alert(" USUARIO " + id_usuario + " TOTAL" + total);
        var token = '{{csrf_token()}}';
        var data = {
        id_usuario: id_usuario,
        id_direccion: id_direccion,
        id_metodo: id_metodo,
        total: total,
        _token: token
        };
        if(id_met)
        $.ajax({
        type: "POST",
        url: "/insertar_venta",
        data: data,
        success: function(msg) {
        }
        });
        } else {
        alert("No selecciono el metodo de pago");
        }
        } else {
        alert("No selecciono a que direccion se entregara");
        }*/
    }

</script>
@stop
@stop
