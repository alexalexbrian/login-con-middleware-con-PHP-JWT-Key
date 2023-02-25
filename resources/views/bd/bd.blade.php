@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">

<h3 title="eloquent">Mysql <small style="font-size: 12px;">bd_blade.php</small></h3>
<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->

<div class="clearfix">&nbsp; </div>


<div class="container">
    <div class="row">
      <div class="col-sm">
        
      </div>
      <div class="col-sm">
        

        <ul class="list-group list-unstyled">
            <li> <a href="{{route('bd_categorias')}}" class="list-group-item list-group-item-action active rounded-1">Categorías</a> </li>
            <li> <a href="{{route('bd_productos')}}" class="list-group-item list-group-item-action rounded rounded-1">Productos</a> </li>
            <li> <a href="{{route('bd_productos_paginacion')}}" class="list-group-item list-group-item-action rounded rounded-1">Paginación</a> </li>
            <li> <a href="{{route('bd_buscador')}}" class="list-group-item list-group-item-action rounded rounded-1">Buscador</a> </li>
        </ul>




      </div>
      <div class="col-sm">
        
      </div>
    </div>
  </div>



  <div class="clearfix">&nbsp; </div>





</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->