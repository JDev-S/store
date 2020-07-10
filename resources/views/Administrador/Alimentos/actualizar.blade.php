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
@section('metas')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
<main class="body-content">
    @foreach($alimentos as $alimento)
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header">
                        <h6>Formulario de alimento</h6>
                    </div>
                    <?php
               $query2 = "select * from categoria ";
                $data2=DB::select($query2);      
              ?>
                    <div class="ms-panel-body">
                        <form enctype="multipart/form-data" class="needs-validation clearfix" novalidate="" method="POST" action={{route('Admin_alimentos_editar')}}>
                            {{ csrf_field() }}
                            <input type="hidden" value='{{$alimento->id_alimento}}' name="id_alimento" id="id_alimento">
                            <input type="hidden" value='{{$alimento->eliminado}}' name="eliminado" id="eliminado">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Nombre del alimento</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre del alimento" required="" name="nombre_alimento" value='{{$alimento->nombre_alimento}}'>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom22">Elige una categoria</label>
                                    <div class="input-group">

                                        <select class="form-control" id="validationCustom22" required="" name="id_categoria">
                                            <option value="{{ $alimento->id_categoria }}"> {{ $alimento->nombre_categoria }} </option>
                                            @foreach($data2 as $item)
                                            <option value="{{ $item->id_categoria }}"> {{ $item->nombre_categoria }} </option>

                                            @endforeach

                                        </select>
                                        <div class="invalid-feedback">
                                            Porfavor selecciona una categoria
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Precio</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="$100" required="" name="precio" value="{{$alimento->precio}}">
                                        <div class="invalid-feedback">
                                            Price
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom12">Descripción</label>
                                    <div class="input-group">
                                        <textarea rows="5" id="validationCustom12" class="form-control" placeholder="Escribe la descripcion" required="" name="descripcion">{{$alimento->descripcion}} </textarea>
                                        <div class="invalid-feedback">
                                            Please provide a message.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom12">Imagen del alimento</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="fotografia_miniatura">
                                        <label class="custom-file-label" for="validatedCustomFile">Elige la imagen</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                            <!--<button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>-->
                    </div>
                </div>

            </div>

            <div class="col-xl-6 col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <h6>Producto </h6>
                            </div>
                            <div class="ms-panel-body">
                                <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                                    <img src='{{$alimento->fotografia_miniatura}}'>
                                </div>
                            </div>
  @endforeach
                            <div class="ms-panel-header new">
                                <p class="medium">Disponibles</p>
                                <div>
                                    <label class="ms-switch">
                                        <?php 
                                        if($alimento->disponible==0)
                                        {
                                          echo '<input type="checkbox" name="disponible", value="1">'.
                                          '<span class="ms-switch-slider round"></span>';
                                            
                                        }
                                        else
                                        {
                                            echo '<input type="checkbox" name="disponible" value="1" checked>'.
                                        '<span class="ms-switch-slider round"></span>';
                                           
                                        }
                                         ?>
                                    </label>
                                </div>
                            </div>


                            <div class="ms-panel-header new">
                                <!--<button class="btn btn-secondary d-block" type="submit">Guardar</button>-->
                                <button class="btn btn-primary d-block" type="submit">Guardar cambios</button>
                                </form>

                            </div>
                            <div class="ms-panel-header new">
                                <button class="btn btn-danger" data-toggle="modal" id="extra" name="extra" data-target="#modal-5">Imagenes extras </button>
                                <!--<button class="btn btn-success" data-toggle="modal" data-target="#modal-6">Ingredientes  </button>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  

    <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header bg-primary">
                    <h3 class="modal-title has-icon text-white"><i class="flaticon-placeholder"></i> Imágenes extras</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>

                <div class="modal-body">
                    <button class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar </button>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="data-table-imagenes" class="table w-100 thead-primary">
                                <thead>
                                    <td style="color:#ffffff">Imagen</td>
                                    <td style="color:#ffffff">Nombre alimento</td>
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



    <!-- model insertar-->
    <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="insertModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="insertModalLabel">Agregar imágenes extra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom12">Imagenes </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inpFile" name="inpFile" multiple="multiple" onchange="GetFileInfo()">
                            <label class="custom-file-label" for="validatedCustomFile">Elige las imagenes</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>

                    <h6>Imagenes extras </h6>
                    <div class="ms-panel-body">
                        <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div id="visorArchivo"></div>
                            </div>
                            <ol class="carousel-indicators" id="miniatura">

                            </ol>
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


</main>

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
</div>

@section('scripts')

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
        var id_alimento = $("#id_alimento").val();
        var url = "admin_imagenes_muestra/" + id_alimento;
        $.ajax({
            method: "GET",
            url: url,
            dataType: "json",
            success: function(data) {
                var datos = JSON.parse(data);
                datos.forEach(objeto => {
                    var tmp = [];
                    tmp.push(
                        "<img src='" + objeto.imagen_muestra + "' style='width:50px; height:30px;'>",
                        objeto.nombre_alimento,
                        '<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_imagen_muestra + '" data-nombre="' + objeto.nombre_alimento + '">Eliminar</button>'
                    );
                    arr.push(tmp);
                    console.log(arr);
                });
                tabla = $('#data-table-imagenes').DataTable({
                    destroy: true,
                    data: arr,
                    columns: [{
                            tittle: "Imagen"
                        },
                        {
                            tittle: "Nombre aliemnto"
                        },
                        //{defaultContent:'<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-//id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'}
                        {
                            tittle: "Accion"
                        },
                        //{defaultContent:'<button class="eliminar">Eliminar</button>'}
                    ],
                });
            }
        });
    }

    /*FUNCION PARA OBTENER VALOR DE FILA SELECCIONADA CON EL BOTÓN Y ELIMINARLA*/
    $('#data-table-imagenes').on('click', "button.btn", function() {
        //alert("hola");
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
        var token = '{{csrf_token()}}';
        var data = {
            id_imagen_muestra: id_eliminar,
            _token: token
        };

        $.ajax({
            type: "POST",
            url: "/admin_imagenes_muestra_eliminar",
            data: data,
            success: function(msg) {
                datos_datatable.remove();
                $('#deleteModal').modal('hide');
            }
        });
    }

    /*MOSTRAR IMAGENES DEL BOTON DE AGREGAR*/
    function GetFileInfo() {
        var fileInput = document.getElementById("inpFile");
        var message = "";
        var message2 = "";

        if (fileInput.files.length) {
            document.getElementById('visorArchivo').innerHTML = '';
            document.getElementById('miniatura').innerHTML = '';

            for (let i = 0; i < fileInput.files.length; i++) {
                let visor = new FileReader();
                visor.onload = function(e) {

                    if (i == 0) {
                        message = '<div class="carousel-item active">' +
                            '<img class="d-block w-100" src="' + e.target.result + '" alt="' + i + ' slide">' +
                            '</div>';
                        message2 = '<li data-target="#imagesSlider" data-slide-to="' + i + '" class="active"> <img class="d-block w-100" src="' + e.target.result + '" alt="' + i + ' slide"></li>';
                    } else {
                        message += '<div class="carousel-item ">' +
                            '<img class="d-block w-100" src="' + e.target.result + '" alt="' + i + ' slide">' +
                            '</div>';
                        message2 += '<li data-target="#imagesSlider" data-slide-to="' + i + '"><img class="d-block w-100" src="' + e.target.result + '" alt="' + i + ' slide"></li>';
                    }
                    document.getElementById('visorArchivo').innerHTML = message;
                    document.getElementById('miniatura').innerHTML = message2;
                };

                visor.readAsDataURL(fileInput.files[i]);
            }
        }
    }


    function ingresar() {
        //const formData = new FormData();
        //for (const file of inpFile.files) {
        //  formData.append("myFiles[]", file);
        //}
        var id_alimento = $("#id_alimento").val();
        var formData = new FormData();
        var filesLength = document.getElementById('inpFile').files.length;
        for (var i = 0; i < filesLength; i++) {
            formData.append("file[]", document.getElementById('inpFile').files[i]);
        }
        formData.append("id_alimento", id_alimento);
        var data = {
            miarchivo: formData,
           
        };
        
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            contentType: false,
            url: "/Admin_imagenes_muestra_insertar",
            data: formData,
            processData: false,
            cache: false,
            success: function(msg) {
                alert(msg);
                var arr = [];
                var datos = JSON.parse(msg);
                datos.forEach(objeto => {
                    var tmp = [];
                    tmp.push(
                        "<img src='" + objeto.imagen_muestra + "' style='width:50px; height:30px;'>",
                        objeto.nombre_alimento,
                        '<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="' + objeto.id_imagen_muestra + '" data-nombre="' + objeto.nombre_alimento + '">Eliminar</button>'
                    );
                    arr.push(tmp);
                    console.log(arr);
                });
                tabla = $('#data-table-imagenes').DataTable({
                    destroy: true,
                    data: arr,
                    columns: [{
                            tittle: "Imagen"
                        },
                        {
                            tittle: "Nombre aliemnto"
                        },
                        //{defaultContent:'<button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-//id="'+objeto.id_imagen_muestra+'" data-nombre="'+objeto.nombre_alimento+'">Eliminar</button>'}
                        {
                            tittle: "Accion"
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
