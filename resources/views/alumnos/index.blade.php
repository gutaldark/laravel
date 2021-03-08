@extends('layouts.app')

@section('title', 'Administracion y control')

@section('content')

<div class="container-fluid mt-5">

  <!-- mensajes de respuesta -->
  @if(Session::has('msj-exito'))
   <div class="text-center bg-success" style="color:beige;">{{ Session::get('msj-exito') }}</div> 
  @endif

  @if(Session::has('msj-delete'))
   <div class="text-center bg-danger" style="color:beige;">{{ Session::get('msj-delete') }}</div> 
  @endif
    <!-- contenido del modulo -->
    <div class="card col-md-9 offset-1 wow fadeIn">
        <div class="card-body">
            <h5 class="card-header info-color white-text text-center">
                <strong>Listado de Alumnos</strong>
            </h5>
            
            <table class="datatable table table-responsive" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nombre</th>
                        <th class="th-sm">Edad</th>
                        <th class="th-sm">Grado</th>
                        <th class="th-sm">Seccion</th>
                        <th class='th-sm'>Operaciones</th>                               
                    </tr>
                </thead>
                <tbody>
                    @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->edad}}</td>
                            <td>{{$alumno->grado}}</td>
                            <td>{{$alumno->seccion}}</td>
                            <td>  
                                <a target="_blank" href="/alumnos/{{$alumno->id}}/pdf"><i class="fas fa-eye"></i></a>
                                <a href="/alumnos/{{$alumno->id}}/edit"><i class="fas fa-edit"></i></a>
                                <form method="POST" action="{{ url("alumnos/{$alumno->id}") }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="form" style="border:none;"><i class="fas fa-trash"></i></button>
                                </form> 
                            </td>
                        </tr>   
                   @endforeach
                </tbody>  
            </table>
        </div>
    </div>
        <!-- end contenido del modulo -->
        <br>
<script>
function confirmar(){
    //un confirm
    alertify.confirm("<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function (e) {
            if (e) {
                alertify.success("Has pulsado '" + alertify.labels.ok + "'");
            } else { 
                        alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
            }
    }); 
    return false
}
</script>
@include('layouts.footer')
@endsection


