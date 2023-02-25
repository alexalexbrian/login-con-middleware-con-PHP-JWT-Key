@extends('../layouts/frontend')

<!--Para agregar el contenido -->
@section('content')

<main class="container">
    <h3>BD add Productos    <small style="font-size: 12px;">bd_productos_add.blade.php</small></h3>
<x-flash/>
<!--Codigo php en Blade-->
@php

//print_r($categorias);

@endphp
<!--Fin codigo php en Blade-->


<form action="" method="post">




<input type="submit" value="Save" class="btn btn-primary">
{{csrf_field()}}
<hr>
</form>




</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->