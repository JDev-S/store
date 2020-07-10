@extends('welcome3')
@section('contenido')

<main class="body-content">

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
                        <form enctype="multipart/form-data" class="needs-validation clearfix" novalidate="" method="POST" action={{route('Admin_alimentos_nuevo')}}>
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom18">Nombre del alimento</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustom18" placeholder="Nombre del alimento" required="" name="nombre_alimento">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom22">Elige una categoria</label>
                                    <div class="input-group">

                                        <select class="form-control" id="validationCustom22" required="" name="id_categoria">
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
                                        <input type="text" class="form-control" id="validationCustom25" placeholder="$100" required="" name="precio">
                                        <div class="invalid-feedback">
                                            Price
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom12">Descripción</label>
                                    <div class="input-group">
                                        <textarea rows="5" id="validationCustom12" class="form-control" placeholder="Escribe la descripcion" required="" name="descripcion"></textarea>
                                        <div class="invalid-feedback">
                                            Please provide a message.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom12">Imagen del alimento</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fotografia_miniatura" name="fotografia_miniatura">
                                        <label class="custom-file-label" >Elige la imagen</label>
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
                                <h6>Alimento </h6>
                            </div>
                            <div class="ms-panel-body">
                                <h6>Imagen principal </h6>
                                <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                                    <div id="preview"></div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="validationCustom12">Imagenes </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fileInput" name="miarchivo[]" multiple='multiple' onchange="GetFileInfo ()">
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

                            <div class="ms-panel-header new">
                                <p class="medium">Disponibles</p>
                                <div>
                                    <label class="ms-switch">
                                        <input type="checkbox" name="disponible" id="disponible" value="1">
                                        <span class="ms-switch-slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="ms-panel-header new">
                                <!--<button class="btn btn-secondary d-block" type="submit">Guardar</button>-->
                                <button class="btn btn-primary d-block" type="submit">Guardar y añadir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@section('scripts')

<script type="text/javascript">
    document.getElementById("fotografia_miniatura").onchange = function(e) {
        // Creamos el objeto de la clase FileReader
        let reader = new FileReader();
        alert(e.target.files.length);
        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);
        // Le decimos que cuando este listo ejecute el código interno
        reader.onload = function() {
            let preview = document.getElementById('preview'),
                image = document.createElement('img');
            image.src = reader.result;
            preview.innerHTML = '';
            preview.append(image);
        };
    }

</script>


<script type="text/javascript">
    function GetFileInfo() {
        var fileInput = document.getElementById("fileInput");
        var archivoRuta = fileInput.value;
        var extPermitidas = /(.PNG|.png|.jpg|.JPG|.JPEG|.jpeg)$/i;
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

</script>
@stop

@stop
