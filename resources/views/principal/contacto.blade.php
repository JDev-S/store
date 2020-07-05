@extends('welcome2')
@section('contenido')
<div class="breadcrumbs">
    <div class="container">
        <div class="current-name">
            Contacto

        </div>
        <ul class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="/contacto">Contactanos</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <!-- <ul class="breadcrumb">
        <li><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=information/contact">Contact Us</a></li>
      </ul> -->

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="info-contact row">
                <div class="col-sm-6 col-xs-12 info-store">


                    
                    <h1>Mostrar mapa del lugar</h1>

                </div>

                <div class="col-sm-6 col-xs-12 contact-form">
                    <form action="https://opencart.opencartworks.com/themes/so_megastore/layout2/index.php?route=information/contact " method="post" enctype="multipart/form-data" class="form-horizontal">
                        <fieldset>
                            <legend>
                                <h2>Llena el formulario</h2>
                            </legend>
                            <p>Queremos saber de ti, comunicate con nosotros
                            </p>

                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <input type="text" name="name" value="" id="input-name" class="form-control" placeholder="Nombre completo *">

                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <input type="text" name="email" value="" id="input-email" class="form-control" placeholder="Correo electronico *">

                                </div>
                            </div>
                            <div class="form-group required">
                                <div class="col-sm-12">
                                    <textarea name="enquiry" value="Enquiry" rows="10" id="input-enquiry" placeholder="Escribe tu duda *" class="form-control"></textarea>

                                </div>
                            </div>

                        </fieldset>
                        <div class="buttons">
                            <div class="pull-left">
                                <button class="btn btn-info" type="submit"><span>Enviar </span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@stop
