<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="editar-{{$alu->id_alumno}}">
    {{Form::Open(array('action'=>array('AlumnosController@alta',$alu->id_alumno)))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Activar Contenedor</h4>
            </div>
            <div class="modal-body">
                <p>Confirme si desea activar el Contenedor,  {{$alu->nombre}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </div>
        </div>
    </div>
    {{Form::Close()}}

</div>