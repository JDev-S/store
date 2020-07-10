@extends('welcome3')
@section('contenido')
@section('styles')
<style>
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 400px;
    overflow-y: auto;
}
</style>  
@stop
<main class="body-content">
    <div id="btn" style="">
        <a href="Hola"><i class="fa fa-trash-o" aria-hidden="true"></i>hola</a>
    </div>
    @foreach($usuarios as $usuario)
    <form enctype="multipart/form-data" class="needs-validation clearfix" novalidate="" method="POST" action={{route('Admin_usuario_actualizar')}}>
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Formulario de actualizar usuario parte1</h6>
                        </div>
                        <?php
               $query2 = "select * from rol ";

                $data2=DB::select($query2);
              
              ?>
                        <div class="ms-panel-body">

                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Nombre(s)</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe tu nombre(s)" required="" name="nombre" value="{{$usuario->nombre}}">
                                        <input type="hidden" name="eliminado" id="eliminado" value="{{$usuario->eliminado}}">
                                        <input type="hidden" name="id_usuario" id="id_usuario" value="{{$usuario->id_usuario}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Apellidos</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe apellidos" required="" name="apellidos" value="{{$usuario->apellidos}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Nombre de usuario</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre de usuario" required="" name="nombre_usuario" value="{{$usuario->nombre_usuario}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom22">Elige una rol</label>
                                    <div class="input-group">

                                        <select class="form-control" id="id_rol" required="" name="id_rol">
                                            <option value="{{ $usuario->id_rol }}"> {{ $usuario->rol }} </option>
                                            @foreach($data2 as $item)
                                            <option value="{{ $item->id_rol }}"> {{ $item->rol }} </option>

                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">
                                            Porfavor selecciona un rol
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Sexo</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="M /F " required="" name="sexo" value="{{$usuario->sexo}}">
                                        <div class="invalid-feedback">
                                            Sexo
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ms-panel">
                                <div class="ms-panel-header">
                                    <h6>Formulario de actualizar usuario parte2</h6>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Correo electronico</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="validationCustom18" placeholder="Escribe un email" required="" name="correo" value="{{$usuario->correo}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Contraseña</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="validationCustom18" placeholder="Escribe contraseña" required="" name="contraseña" value="{{$usuario->contraseña}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Teléfono</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="Escribe un telefono" required="" name="telefono" value="{{$usuario->telefono}}">
                                        <div class="invalid-feedback">
                                            telefono
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Fecha de nacimineto</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationCustom25" required="" name="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}">
                                        <div class="invalid-feedback">
                                            fecha
                                        </div>
                                    </div>
                                </div>

                                <div class="ms-panel-header new">
                                    <button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>
    </form>


    </div>

    </div>

    </div>
    </div>
    </div>

    </div>
    </div>
    @endforeach

    <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header bg-primary">
                    <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i>Direcciones</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <button class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar </button>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="data-table-imagenes" class="table w-100 thead-primary">
                                <thead>
                                    <td style="color:#ffffff">Nombre (c)</td>
                                    <td style="color:#ffffff">Persona recibe</td>
                                    <td style="color:#ffffff">Colonia</td>
                                    <td style="color:#ffffff">Calle</td>
                                    <td style="color:#ffffff">CP</td>
                                    <td style="color:#ffffff">Acciones</td>

                                    <!--<td style="color:#ffffff">Acciones2</td>-->
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="" class="btn btn-primary shadow-none" data-dismiss="modal">Cancelar</a>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Agregar dirección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Persona recibe</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="persona_recibe" placeholder="Persona recibe" required="" name="persona_recibe">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Colonia</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="colonia" placeholder="Colonia" required="" name="colonia">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="calle" placeholder="Calle" required="" name="calle">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Numero interior</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="numero_interior" placeholder="Numero interior" name="numero_interior">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Numero exterior</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="numero_exterior" placeholder="Numero exterior" required="" name="numero_exterior">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Codigo postal</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cp" placeholder="Codigo postal" required="" name="cp">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom12">Referencia</label>
                        <div class="input-group">
                            <textarea rows="5" id="referencia" class="form-control" placeholder="Referencia" required="" name="referencia"></textarea>
                            <div class="invalid-feedback">
                                Please provide a message.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle A</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="calleA" placeholder="Calle A" required="" name="calleA">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle B</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="calleB" placeholder="Calle B" required="" name="calleB">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Telefono</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono" required="" name="telefono">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="ingresar()">Ingresar</button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Agregar dirección</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Persona recibe</label>
                        <div class="input-group">
                            <input type="hidden" id="direccion" name="direccion">
                            <input type="hidden" id="usuario" name="usuario">
                            <input type="hidden" id="eli" name="eli">
                            <input type="text" class="form-control" id="recibe" placeholder="Persona recibe" required="" name="recibe">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Colonia</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="col" placeholder="Colonia" required="" name="col">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="call" placeholder="Calle" required="" name="call">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Numero interior</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="int" placeholder="Numero interior" name="int">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Numero exterior</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ext" placeholder="Numero exterior" required="" name="ext">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Codigo postal</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pc" placeholder="Codigo postal" required="" name="pc">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom12">Referencia</label>
                        <div class="input-group">
                            <textarea rows="5" id="ref" class="form-control" placeholder="Referencia" required="" name="ref"></textarea>
                            <div class="invalid-feedback">
                                Please provide a message.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle A</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="ca" placeholder="Calle A" required="" name="ca">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Calle B</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cb" placeholder="Calle B" required="" name="cb">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom18">Telefono</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="tel" placeholder="Telefono" required="" name="tel">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal" onclick="actualizar()">Actualizar</button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--model eliminar -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Eliminar categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
                    </div>
                    <button type="button" class="btn btn-secondary" onclick="eliminar()">Sí</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>



</main>

@section('scripts')
<script type="text/javascript">
    document.getElementById('btn').innerHTML = ''
    var cod = document.getElementById("id_rol").value;
    var mensaje = "";
    if (cod == 2) {
        mensaje = '<button class="btn btn-danger" data-toggle="modal" id="extra" name="extra" data-target="#modal-5">Direccion</button>';
    } else {
        mensaje = "";
    }
    document.getElementById('btn').innerHTML = mensaje;

</script>

<script type="text/javascript">
    /*DECLARACION DE VARIABLES GLOBALES*/
    var tabla;
    var id_eliminar = "";
    var datos_datatable;

    /*FUNCION QUE EJECUTA LA FUNCION DATATABLE AL DAR CLIC EN BOTON IMAGENES EXTRA*/
    $("#extra").on('click', function() {
        datatable();
    });

    /*FUNCION QUE CREA DATATABLE CON DATOS DEL SERVIDOR*/
    function datatable() {
        var arr = [];
        var id_alimento = $("#id_usuario").val();
        var url = "admin_direcciones/" + id_alimento;
        alert(url);
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                var datos = JSON.parse(data);
                datos.forEach(objeto => {
                    var tmp = [];
                    tmp.push(
                        objeto.nombre_completo,
                        objeto.persona_recibe,
                        objeto.colonia,
                        objeto.calle,
                        objeto.cp,
                        '<button   class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_direccion + '" data-nombre="' + objeto.colonia + ' ' + objeto.calle + '"><i class="fa fa-trash"></i></button>' +
                        '<button   class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="' + objeto.id_direccion + '" data-id2="' + objeto.id_usuario + '"  data-persona="' + objeto.persona_recibe + '"  data-colonia="' + objeto.colonia + '"  data-calle="' + objeto.calle + '"  data-interior="' + objeto.numero_interior + '"  data-exterior="' + objeto.numero_exterior + '"  data-cp="' + objeto.cp + '"  data-referencia="' + objeto.referencia + '"  data-ca="' + objeto.calleA + '" data-cb="' + objeto.calleB + '"  data-telefono="' + objeto.telefono + '"  data-eliminado="' + objeto.eliminado + '"><i class="fa fa-pencil-alt"></i></button>'
                    );
                    arr.push(tmp);
                    console.log(arr);
                });
                tabla = $('#data-table-imagenes').DataTable({
                    destroy: true,
                    data: arr,
                    columns: [{
                            tittle: "Nombre (c)"
                        },
                        {
                            tittle: "Persona recibe"
                        },
                        {
                            tittle: "Colonia"
                        },
                        {
                            tittle: "Calle"
                        },
                        {
                            tittle: "CP"
                        },
                        //{defaultContent:'<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-//id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'}
                        {
                            tittle: "Acciones"
                        },
                        //{defaultContent:'<button class="eliminar">Eliminar</button>'}
                    ],
                });
            }
        });
    }

    /*FUNCION PARA OBTENER VALOR DE FILA SELECCIONADA CON EL BOTÓN Y ELIMINARLA*/
    $('#data-table-imagenes').on('click', "button.btn", function() {
        alert("hola");
        var data = tabla.row($(this).parents("tr")).data(); //RECUPERA VALOR DE FILA DE DATATABLE
        datos_datatable = $(this).parent().parent(); //REMUEVE FILA DE DATATABLE 
    });

    /*FUNCION QUE SE EJECUTA AL ABRIR EL MODAL. RENOMBRA ELEMENTOS DEL MODAL*/
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var nombre = button.data('nombre');
        id_eliminar = id;
        var modal = $(this);
        modal.find('.col-form-label').text('¿Esta seguro que desea eliminar la foto del alimento: ' + nombre + '?');
    });


    /*ELIMINAR DE LA BASE DE DATOS EL REGISTRO SELECCCIONADO*/
    function eliminar() {
        alert(id_eliminar);
        var token = '{{csrf_token()}}';
        var data = {
            id_direccion: id_eliminar,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/admin_direccioneseliminar",
            data: data,
            success: function(msg) {
                datos_datatable.remove();
                $('#deleteModal').modal('hide');
            }
        });
    }


    function ingresar() {
        var id_usuario = $("#id_usuario").val();
        var persona_recibe = $("#persona_recibe").val();
        var colonia = $("#colonia").val();
        var calle = $("#calle").val();
        var numero_interior = $("#numero_interior").val();
        var numero_exterior = $("#numero_exterior").val();
        var cp = $("#cp").val();
        var referencia = $("#referencia").val();
        var calleA = $("#calleA").val();
        var calleB = $("#calleB").val();
        var telefono = $("#telefono").val();
        var nombre_completo = $("#nombre").val() + "  " + $("#apellidos").val();

        console.log(id_usuario + ' ' + persona_recibe + " " + colonia + " " + calle + " " + numero_interior + "  " + numero_exterior + " " + cp + " " +
            referencia + "  " + calleA + "  " + calleB + "  " + telefono);


        var token = '{{csrf_token()}}';
        var data = {
            id_usuario: id_usuario,
            persona_recibe: persona_recibe,
            colonia: colonia,
            calle: calle,
            numero_interior: numero_interior,
            numero_exterior: numero_exterior,
            cp: cp,
            referencia: referencia,
            calleA: calleA,
            calleB: calleB,
            telefono: telefono,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/admin_direccionesingresar",
            data: data,
            success: function(msg) {
                alert(msg);
                
                tabla.row.add([
                    nombre_completo,
                    persona_recibe,
                    colonia,
                    calle,
                    cp,
                    '<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + msg + '" data-nombre="' + colonia + ' ' + calle + '"><i class="fa fa-trash"></button>' +
                        '<button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="' + id_direccion + '" data-id2="' + id_usuario + '"  data-persona="' + persona_recibe + '"  data-colonia="' + colonia + '"  data-calle="' + calle + '"  data-interior="' + numero_interior + '"  data-exterior="' + numero_exterior + '"  data-cp="' + cp + '"  data-referencia="' + referencia + '"  data-ca="' + calleA + '" data-cb="' + calleB + '"  data-telefono="' + telefono + '"  data-eliminado="' + 0 + '"><i class="fa fa-pencil-alt"></button>'
                ]).draw(false);
                $('#insertModal').modal('hide');
            }
        });
    }


    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id_direccion = button.data('id')
        var id_usuario = button.data('id2')
        var persona_recibe = button.data('persona')
        var colonia = button.data('colonia')
        var calle = button.data('calle')
        var numero_interior = button.data('interior')
        var numero_exterior = button.data('exterior')
        var cp = button.data('cp')
        var referencia = button.data('referencia')
        var calleA = button.data('ca')
        var calleB = button.data('cb')
        var telefono = button.data('telefono')
        var eliminado = button.data('eliminado')

        var modal = $(this)
        modal.find('#direccion').val(id_direccion)
        modal.find('#usuario').val(id_usuario)
        modal.find('#recibe').val(persona_recibe)
        modal.find('#col').val(colonia)
        modal.find('#call').val(calle)
        modal.find('#int').val(numero_interior)
        modal.find('#ext').val(numero_exterior)
        modal.find('#pc').val(cp)
        modal.find('#ref').val(referencia)
        modal.find('#ca').val(calleA)
        modal.find('#cb').val(calleB)
        modal.find('#tel').val(telefono)
        modal.find('#eli').val(eliminado)

    });




    function actualizar() {
        var id_direccion = $("#direccion").val();
        var id_usuario = $("#usuario").val();
        var persona_recibe = $("#recibe").val();
        var colonia = $("#col").val();
        var calle = $("#call").val();
        var numero_interior = $("#int").val();
        var numero_exterior = $("#ext").val();
        var cp = $("#pc").val();
        var referencia = $("#ref").val();
        var calleA = $("#ca").val();
        var calleB = $("#cb").val();
        var telefono = $("#tel").val();
        var eliminado = $("#eli").val();
        var nombre_completo = $("#nombre").val() + "  " + $("#apellidos").val();

        console.log(id_usuario + ' ' + persona_recibe + " " + colonia + " " + calle + " " + numero_interior + "  " + numero_exterior + " " + cp + " " +
            referencia + "  " + calleA + "  " + calleB + "  " + telefono);


        var token = '{{csrf_token()}}';
        var data = {
            id_usuario: id_usuario,
            id_direccion: id_direccion,
            persona_recibe: persona_recibe,
            colonia: colonia,
            calle: calle,
            numero_interior: numero_interior,
            numero_exterior: numero_exterior,
            cp: cp,
            referencia: referencia,
            calleA: calleA,
            calleB: calleB,
            telefono: telefono,
            eliminado: eliminado,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/admin_direccionesactualizar",
            data: data,
            success: function(msg) {
                 var arr = [];
                var datos = JSON.parse(msg);
                datos.forEach(objeto => {
                    var tmp = [];
                    tmp.push(
                        objeto.nombre_completo,
                        objeto.persona_recibe,
                        objeto.colonia,
                        objeto.calle,
                        objeto.cp,
                        '<button   class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_direccion + '" data-nombre="' + objeto.colonia + ' ' + objeto.calle + '"><i class="fa fa-trash"></i></button>' +
                        '<button   class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="' + objeto.id_direccion + '" data-id2="' + objeto.id_usuario + '"  data-persona="' + objeto.persona_recibe + '"  data-colonia="' + objeto.colonia + '"  data-calle="' + objeto.calle + '"  data-interior="' + objeto.numero_interior + '"  data-exterior="' + objeto.numero_exterior + '"  data-cp="' + objeto.cp + '"  data-referencia="' + objeto.referencia + '"  data-ca="' + objeto.calleA + '" data-cb="' + objeto.calleB + '"  data-telefono="' + objeto.telefono + '"  data-eliminado="' + objeto.eliminado + '"><i class="fa fa-pencil-alt"></i></button>'
                    );
                    arr.push(tmp);
                    console.log(arr);
                });
                tabla = $('#data-table-imagenes').DataTable({
                    destroy: true,
                    data: arr,
                    columns: [{
                            tittle: "Nombre (c)"
                        },
                        {
                            tittle: "Persona recibe"
                        },
                        {
                            tittle: "Colonia"
                        },
                        {
                            tittle: "Calle"
                        },
                        {
                            tittle: "CP"
                        },
                        //{defaultContent:'<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-//id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'}
                        {
                            tittle: "Acciones"
                        },
                        //{defaultContent:'<button class="eliminar">Eliminar</button>'}
                    ],
                });
            }
        });
    }

</script>

@stop

@stop
