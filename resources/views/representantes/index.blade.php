@extends('layouts.app')

@section('title', 'Administracion y control')

@section('content')

<div class="container-fluid mt-5">

  <!-- mensajes de respuesta -->
  @if(Session::has('msj-exito'))
   <div class="text-center bg-success" style="color:beige;">{{ Session::get('msj-exito') }}</div> 
  @endif

  @if(Session::has('msj-delete'))
   <div class="text-center bg-success" style="color:beige;">{{ Session::get('msj-exito') }}</div> 
  @endif
    <!-- contenido del modulo -->
    <div class="card col-md-9 offset-1 wow fadeIn">
        <div class="card-body">
            <h5 class="card-header info-color white-text text-center">
                <strong>Listado de Representantes</strong>
            </h5>
            
            <table class="datatable table table-responsive" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nombre</th>
                        <th class="th-sm">Cedula</th>
                        <th class="th-sm">Profesion</th>
                        <th class="th-sm">Telefono</th>
                        <th class='th-sm'>Operaciones</th>                               
                    </tr>
                </thead>
                <tbody>
                    @foreach($representantes as $representante)
                        <tr>
                            <td>{{$representante->nombre}}</td>
                            <td>{{$representante->cedula}}</td>
                            <td>{{$representante->profesion}}</td>
                            <td>{{$representante->telefono}}</td>
                            <td>  
                                <a target="_blank" href="pdf.php?id={{$representante->id}}"><i class="fas fa-eye"></i></a>
                                <a href="/representantes/{{$representante->id}}/edit"><i class="fas fa-edit"></i></a>
                                <a href="#eliminarRepre" onClick="representantes('{{$representante->id}}')" data-toggle="modal"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>   
                   @endforeach
                </tbody>  
            </table>
        </div>
    </div>
        <!-- end contenido del modulo -->
        <br>

        <!-- VENTANA MODAL ELIMINAR USUARIO -->
    <div class="container">
        <div class="modal" id="eliminarRepre">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                    <center>
                    <form action="/alumnos" method="DELETE">
                        <input type="hidden" name="repre_delete" id="repre_delete">
                        <div class="div-general mx-auto" id="div-general">
                            <div class="alerta-div mx-auto">
                        
                                <div class="content">
                                <h3>Seguro que desea eliminar?</h3> <br>
                                <p>Esta Opcion No Puede Ser Disuelta!</p>
                                </div>
                                <div class="buttons">
                                <button type="submit" class="confirm-button danger-button msj-espera" data-l10n-id="about-logins-confirm-remove-dialog-confirm-button">Eliminar</button>
                                    <button class="cancel-button" data-dismiss="modal" data-l10n-id="confirmation-dialog-cancel-button">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//funcion para capturar el id y pasarlo al modal para ser procesado
function representantes(clicked_id){
    var id = clicked_id;
    
    $("#repre_delete").val(id);
}
</script>

@include('layouts.footer')
@endsection