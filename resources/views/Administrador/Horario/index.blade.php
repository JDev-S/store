@extends('welcome3')
@section('contenido')

<main class="body-content">
    <!-- Navigation Bar -->
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menu List</li>
                    </ol>
                </nav>
                <div class="ms-panel">
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="data-table-prueba" class="table w-100 thead-primary"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar día</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('action' => 'HorarioController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    
                     <label for="recipient-name" class="col-form-label" id="dia" name="dia"></label>
                    <br/>
                    <label for="recipient-name" class="col-form-label">Hora inicial:</label>
                    {{ Form::text('hora_inicial', '', array('id' => 'hora_inicial','class'=>'form-control',  'placeholder' => '0:00 ','required' => 'required')) }}
                    {{ Form::hidden('id_horario', '', array('id' => 'id_horario',  'placeholder' => 'Id')) }}
                    {{ Form::hidden('dia', '', array('id' => 'dia',  'placeholder' => 'Id')) }}

                </div>

                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Hora Final:</label>
                    {{ Form::text('hora_final', '', array('id' => 'hora_final','class'=>'form-control',  'placeholder' => '0:00 ','required' => 'required')) }}


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
        var id = button.data('id')
        var dia = button.data('dia')
        var inicial = button.data('inicial')
        var final = button.data('final')
        //alert(id+"  "+dia+"   "+inicial+"  "+final);
        var modal = $(this)
        modal.find('#id_horario').val(id)
        modal.find('#dia').val(dia)
        modal.find('#hora_inicial').val(inicial)
        modal.find('#hora_final').val(final)

    });

</script>

<script type="text/javascript">
    (function($) {
        'use strict';

        var datos = JSON.parse('<?= json_encode($horarios) ?>');

        var arr = [];

        datos.forEach(objeto => {
            var tmp = [];
            tmp.push(


                objeto.dia,
                objeto.hora_inicial,
                objeto.hora_final,
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-id="' + objeto.id_horario + '" data-inicial="' + objeto.hora_inicial + '" data-dia="' + objeto.dia + '"  data-final="' + objeto.hora_final + '" >Editar</button>'

                //objeto.id_alimento,
                //objeto.id_categoria

            );

            arr.push(tmp);
            console.log(arr);

        });
        var tableTwo = $('#data-table-prueba').DataTable({
            data: arr,
            columns: [

                {
                    title: "Dia"
                },
                {
                    title: "Hora inicial"
                },
                {
                    title: "Hora Final"
                },
                {
                    title: "Acciones"
                }
            ],
        });
    })(jQuery);

</script>
@stop
@stop
