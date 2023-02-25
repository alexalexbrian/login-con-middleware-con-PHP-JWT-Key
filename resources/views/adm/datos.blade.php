@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h3>admin admin admin admin</h3>

<!--Codigo php en Blade-->
@php

echo $user;

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->


<h1>Ya estas viendo la vista, has iniciar sesion</h1>



</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->