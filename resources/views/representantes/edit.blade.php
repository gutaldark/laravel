@extends('layouts.app')

@section('title', 'Administracion y control')

@section('content')

<div class="container-fluid mt-5">
    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

            <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="#"><i class="fas fa-users"></i> Representantes</a>
                <span>/</span>
                <span>Modificar</span>
            </h4>
            
        </div>
    </div>
      <!-- Heading -->

       <!-- mensajes de respuesta -->
      

    <form method="POST" action="/representantes/{{$representante->id}}" class="form">
    @method('PUT')
    @csrf
    
        <div class="form-row">
           <!-- item input -->
           <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$representante->nombre}}" id="nombre" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input -->       
            
            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" value="{{$representante->apellido}}" id="apellido" name="apellido" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input -->  

            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="cedula">Cedula</label>
                <input type="text" class="form-control" value="{{$representante->cedula}}" id="cedula" name="cedula" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input -->  

             <!-- item input -->
             <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="fecha">fecha de nacimientos</label>
                <input type="date" class="form-control" value="{{$representante->fecha}}" id="fecha" name="fecha" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="civil">Estado Civil</label>
                <select name="civil" class="browser-default custom-select" required>
                    <option value="{{$representante->civil}}" selected>{{$representante->civil}}</option>
                    <option value="solter@">Solter@</option>
                    <option value="casad@">Casad@</option>
                </select>                           
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3  mb-1 md-form">
                <label for="profesion">Profesion</label>
                <input type="text" class="form-control" value="{{$representante->profesion}}" id="profesion" name="profesion" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" value="{{$representante->telefono}}" id="telefono" name="telefono" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" value="{{$representante->direccion}}" id="direccion" name="direccion" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="lugardv">Lugar Donde Vive</label>
                <input type="text" class="form-control" value="{{$representante->lugardv}}" id="lugardv" name="lugardv" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 
            </div>  
            
           <div class="col-md-12 mb-1 md-form"></div>

        <button class="btn btn-primary btn-md offset-5 btn-rounded" type="submit">Modificar</button>
        <button class="btn btn-danger btn-md btn-rounded" type="reset">Resetear</button>  
    </form>
</div>
<br>
  
@include('layouts.footer')
@endsection