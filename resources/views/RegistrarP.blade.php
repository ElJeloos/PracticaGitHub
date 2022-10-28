@extends('Plantilla')

@section('contenido')

<h1 class="text-center mb-5">Registrar Videojuego</h1>



<div class="container mt-5 col-md-3">
<div aling="center">

<div class="card text-center" style="width: 20rem;">
  <div class="card-header" >

  
    <form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre Videojuego</label>
        <input type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="text" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  </div>
</div>
</div>






@stop


