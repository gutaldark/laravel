@extends('layouts.app')

@section('title', 'Administracion y control')

@section('content')

<div class="container-fluid mt-5">
    <!-- Heading -->
    <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

            <h4 class="mb-2 mb-sm-0 pt-1">
                <a href="#"><i class="fas fa-users"></i> Alumnos</a>
                <span>/</span>
                <span>Crear</span>
            </h4>
            
        </div>
    </div>
      <!-- Heading -->

       <!-- mensajes de respuesta -->
       @if(Session::has('msj-crear'))
       <div class="text-center bg-success" style="color:beige;">{{ Session::get('msj-crear') }}</div> 
      @endif

    <form method="POST" action="/alumnos" class="form">
    @csrf
        <div class="form-row">
            <!-- item input -->
            <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input -->       
            
            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input -->  

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="fecha">fecha de nacimientos</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="lugar_nacimiento">Lugar de nacimiento</label>
                <input type="text" class="form-control" id="lugar_nacimiento" name="lugar_nacimiento" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3  mb-1 md-form">
                <label for="pdoi">Pertenece de otra Institucion</label>
                <input type="text" class="form-control" id="pdoi" name="pdoi" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 mb-1 md-form">
                <label for="dhd">DHD</label>
                <input type="text" class="form-control" id="dhd" name="dhd" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

            <!-- item input -->
            <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="talla">Talla</label>
                <input type="text" class="form-control" id="talla" name="talla" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="peso">Peso</label>
                <input type="text" class="form-control" id="peso" name="peso" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="zapato">Zapato</label>
                <input type="text" class="form-control" id="zapato" name="zapato" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="od">Observacion</label>
                <input type="text" class="form-control" id="od" name="od" required>                            
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="sexo">Sexo</label>
                <select name="sexo" class="browser-default custom-select" required>
                    <option value="" selected>Genero</option>
                    <option value="M">Hombre</option>
                    <option value="F">Mujer</option>
                </select>                          
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 offset-2 mb-1 md-form">
                <label for="grado">Grado</label>
                <select name="grado" class="browser-default custom-select" required>
                    <option value="" selected>Eliga Un Grado</option>
                    <option value="1ro"> Primer grado</option>
                    <option value="2do"> Segundo grado</option>
                    <option value="3ro"> Tercer grado</option>
                    <option value="4to"> Cuarto grado</option>
                    <option value="5to"> Quinto grado</option>
                    <option value="6to"> Sexto grado</option>
                </select>                          
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="seccion">Seccion</label>
                <select name="seccion" class="browser-default custom-select" required>
                    <option value="" selected>Selecionar Seccion</option>
                    <option value="A"> A</option>
                    <option value="B"> B</option>
                    <option value="C"> C</option>
                    <option value="D"> D</option>
                    <option value="E"> E</option>
                </select>                          
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 

             <!-- item input -->
             <div class="col-md-3 mb-1 md-form">
                <label for="turno">Turno</label>
                <select name="turno" class="browser-default custom-select" required>
                    <option value="" selected>Selecionar Turno</option>
                    <option value="Mañana"> Mañana</option>
                    <option value="Tarde"> Tarde</option>
                </select>                          
                <div class="invalid-feedback">
                    Por favor completa este campo.
                </div>
            </div>  
            <!-- end item input --> 
            </div>  
            
           <div class="col-md-12 mb-1 md-form"></div>

        <button class="btn btn-primary btn-md offset-5 btn-rounded" type="submit">Registrar</button>
        <button class="btn btn-danger btn-md btn-rounded" type="reset">Resetear</button>  
    </form>
</div>
<br>
  
@include('layouts.footer')
@endsection