@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h3> Add categorías    <small style="font-size: 12px;">bd_categoria_add.blade.php</small></h3>
<x-flash/>
<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->


             <!--URL PARA GUARDAR LAS CATEGORIA-->
<form action="{{route('bd_categorias_add_post')}}" method="post">



    <div class="mb-3">
      <label for="nombre" class="form-label">Name:</label>
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Help text</small>
    </div>


<input type="submit" value="Enviar" class="btn btn-primary">
<hr>
{{csrf_field()}}
</form>




</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->