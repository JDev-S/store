@extends('welcome3')
@section('contenido')

<main class="body-content">
    <form enctype="multipart/form-data" class="needs-validation clearfix" novalidate="" method="POST" action={{route('Admin_usuario_nuevo')}}>
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Formulario de alimento</h6>
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
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe tu nombre(s)" required="" name="nombre">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Apellidos</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Escribe apellidos" required="" name="apellidos">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Nombre de usuario</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre de usuario" required="" name="nombre_usuario">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Elige el rol</label>
                                    <div class="input-group">

                                        <select class="form-control" id="id_rol" required="" name="id_rol" onchange="elegir()">
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
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="M /F " required="" name="sexo">
                                        <div class="invalid-feedback">
                                            Sexo
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Correo electronico</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="validationCustom18" placeholder="Escribe un email" required="" name="correo">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Contraseña</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="validationCustom18" placeholder="Escribe contraseña" required="" name="contraseña">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Teléfono</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="Escribe un telefono" required="" name="telefono">
                                        <div class="invalid-feedback">
                                            Price
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom25">Fecha de nacimineto</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="validationCustom25" required="" name="fecha_nacimiento">
                                        <div class="invalid-feedback">
                                            Price
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
                                    <h6>Formulario de dirección </h6>
                                </div>
                                <div id="decision">

                                </div>
                                <div id="direccion">


                                </div>
                                <div class="ms-panel-header new">
                                    <button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</main>

@section('scripts')
<script type="text/javascript">
    function elegir() {
        var cod = document.getElementById("id_rol").value;
        document.getElementById('decision').innerHTML = ''
        var mensaje = "";
        if (cod == 2) {
            mensaje = '<div class="ms-panel-header new">' +
                '<p class="medium">Disponibles</p>' +
                '<div>' +
                '<label class="ms-switch">' +
                '<input type="checkbox" name="disponible" value="1" id="disponible">' +
                '<span class="ms-switch-slider round"></span>' +
                '</label>' +
                '</div>' +
                '</div>';
        } else {
            mensaje = "";
        }
        document.getElementById('decision').innerHTML = mensaje;
    }

</script>


<script>
    $(document).on('change', 'input[type="checkbox"]', function(e) {
        if (this.id == "disponible") {
            document.getElementById('direccion').innerHTML = ''
            var mensaje = "";
            if (this.checked) {
                var cod = document.getElementById("disponible").value;
                //alert(cod);

                mensaje = mensaje = '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Persona que recibe</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Escribe persona que recibe"  required="" name="persona_recibe">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    ' </div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Colonia</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Escribe una colonia"  required="" name="colonia">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Calle</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Escribe una calle"  required="" name="calle">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom25">Num.interior</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom25" placeholder="Numero interior" required="" name="numero_interior">' +
                    '<div class="invalid-feedback">' +
                    'Price' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom25">Num.exterior</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom25" placeholder="Numero exterior" required="" name="numero_exterior">' +
                    '<div class="invalid-feedback">' +
                    'Price' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Codigo Postal</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Codigo postal"  required="" name="cp">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom12">Referencia</label>' +
                    '<div class="input-group">' +
                    '<textarea rows="5" id="validationCustom12" class="form-control" placeholder="Agregar referencia" required="" name="referencia"></textarea>' +
                    '<div class="invalid-feedback">' +
                    'Please provide a message.' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Calle A</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Nombre de la calle"  required="" name="calleA">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Calle B</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Nombre de la calle"  required="" name="calleB">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>' +

                    '<div class="col-md-12 mb-3">' +
                    '<label for="validationCustom18">Telefono de Casa</label>' +
                    '<div class="input-group">' +
                    '<input type="text" class="form-control" id="validationCustom18" placeholder="Telefono de casa"  required="" name="tel_casa">' +
                    '<div class="valid-feedback">' +
                    'Looks good!' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            } else {
                //alert("hahaha");
                mensaje = "";

            }
            document.getElementById('direccion').innerHTML = mensaje

        }

    });

</script>
@stop

@stop
