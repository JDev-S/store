@extends('welcome2')
@section('contenido')
<div id="checkout-cart" class="container">
    <ul class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i></a></li>
        <li><a href="/carrito_compra">Carrito de compras</a></li>
    </ul>
    <div class="row">
        <div id="content" class="col-sm-12">
            <h1>Carrito de compras
            </h1>
           
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center">Imagen</td>
                                <td class="text-left">Nombre del producto</td>
                                <td class="text-left">Categoria</td>
                                <td class="text-left">Cantidad</td>
                                <td class="text-right">Precio unitario</td>
                                <td class="text-right">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carrito_compras as $carrito)
                            <tr>
                                <td class="text-center"><img src="{{$carrito->fotografia_miniatura}}" alt="{{$carrito->nombre_alimento}}" title="{{$carrito->nombre_alimento}}" class="img-thumbnail" width="100px" height="100px"> </td>
                                <td class="text-left"><b>{{$carrito->nombre_alimento}}</b> <br>
                                 </td>
                                <td class="text-left">{{$carrito->nombre_categoria}}</td>
                                <td class="text-left">
                                    <div class="input-group btn-block" style="max-width: 200px;">
                                        <input type="text" name="quantity[291]" value="{{$carrito->cantidad}}" size="1" disabled class="form-control">
                                        <span class="input-group-btn">
                                            
                                            <!--<button  data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Actualizar cantidad"><i class="fa fa-refresh"></i></button>
                                            
                                            <button  data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Eliminar"><i class="fa fa-times-circle"></i></button>-->
                                            
                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="<?php echo $carrito->id_usuario;?>" data-id2="<?php echo $carrito->id_alimento;?>" data-cantidad="<?php echo $carrito->cantidad;?>"><i class="fa fa-refresh"></i></button>
                                            
                                             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $carrito->id_usuario;?>" data-id2="<?php echo $carrito->id_alimento;?>" data-platillo="<?php echo $carrito->nombre_alimento;?>"><i class="fa fa-times-circle"></i></button>

                                   
                                            
                                        </span></div>
                                </td>
                                <td class="text-right">${{$carrito->precio}}</td>
                                <td class="text-right">${{$carrito->cantidad * $carrito->precio}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            
            

            <br>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Sub-Total:</strong></td>
                                <td class="text-right">${{$totales[0]->total}}</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Envio:</strong></td>
                                <td class="text-right">$0.00</td>
                            </tr>
                            <tr>
                                <td class="text-right"><strong>Total:</strong></td>
                                <td class="text-right">${{$totales[0]->total+0.00}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="buttons clearfix">
                <div class="pull-left"><a href="/" class="btn btn-default">Continuar_comprando</a></div>
                <div class="pull-right"><a href="/checar"  class="btn btn-default">Proceder a pagar</a></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Eliminar Platillo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'Detalle_ventaController@eliminar_platillo', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
                </div>
                <div class="modal-footer">
                    <div id="oculto" name="oculto">

                    </div>
                    {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar cantidades</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'Detalle_ventaController@actualizar_carrito', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Cantidad :</label>

                    <input type="number" id="cantidad" class="form-control qty text" step="1" min="1" max="50" name="cantidad" required>
                    {{ Form::hidden('id_usuario', '', array('id' => 'id_usuario',  'placeholder' => 'Id')) }}
                    {{ Form::hidden('id_alimento', '', array('id' => 'id_alimento',  'placeholder' => 'Id')) }}
                </div>

                <div class="modal-footer">
                    {!! Form::submit( 'Actualizar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id_usuario = button.data('id')
        var id_alimento = button.data('id2')
        var cantidad = button.data('cantidad')
        alert(id_usuario + "  " + id_alimento + "  " + cantidad);
        var modal = $(this)
        modal.find('#id_usuario').val(id_usuario)
        modal.find('#id_alimento').val(id_alimento)
        modal.find('#cantidad').val(cantidad)

    });

</script>


<script type="text/javascript">
    $('#deleteModal').on('show.bs.modal', function(event) {
        document.getElementById('oculto').innerHTML = ''
        var button = $(event.relatedTarget)
        var id_usuario = button.data('id')
        var id_alimento = button.data('id2')
        var platillo = button.data('platillo')
        alert(id_usuario + "  " + id_alimento + "  " + platillo);
        var modal = $(this)
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el platillo: ' + platillo + '?')
        //document.forms[0].id_usuario.value = id_usuario;
        //document.forms[0].id_alimento.value = id_alimento;
        //document.getElementsByName("id_usuario").value = id_usuario;
        //document.getElementsByName("id_alimento").value = id_alimento;
        document.getElementById('oculto').innerHTML = '<input  type="hidden" name="id_usuario" id="id_usuario" value="' + id_usuario + '">' + '<input  type="hidden" name="id_alimento" id="id_alimento" value="' + id_alimento + '">';

    });

</script>
@stop
@stop
