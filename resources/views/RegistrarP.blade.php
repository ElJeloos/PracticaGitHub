@extends('Plantilla')

@section('contenido')

@if(session()->has('Exito'))
    {!!" <script > Swal.fire(
  'Buen Trabajo',
  '',
  'success'
)  </script>"!!}


 @endif

<h1 class="text-center mb-5">Registrar Videojuego</h1>

@if($errors->any())
        @foreach($errors->all() as $error)

             @endforeach
        @endif



<div class="container mt-5 col-md-3">
<div aling="center">

<div class="card text-center" style="width: 20rem;">
  <div class="card-header" >

  
    <form method="post"action ="GuardarJuego">
    @csrf
    <div class="mb-3">
        <p class="text-primary fst-italic">{{$errors->first('txtname')}}</p>
        <label for="exampleInputEmail1" class="form-label">Nombre Videojuego</label>
        <input type="text" class="form-control" name="txtname">
        
    </div>
    <div class="mb-3">
        <p class="text-primary fst-italic">{{$errors->first('txtdescription')}}</p>
        <label for="exampleInputPassword1" class="txtdescription-label">Descripcion</label>
        <input type="text" class="form-control" name="txtdescription" >
    </div>
    <div class="mb-3">
        <p class="text-primary fst-italic">{{$errors->first('txtprecio')}}</p>
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="number" class="form-control" name="txtprecio" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  </div>
</div>
</div>






@stop


