@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<x-flash />
<h4>Login</h4>

<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->


<form action="{{route('acceso_login_post')}}" method="post">


<div class="mb-3">
    <label for="correo" class="form-label">E-mail</label>
    <input type="email"
      class="form-control" name="correo" id="correo" aria-describedby="helpId" value="{{old('correo')}}" placeholder="">

  </div>



  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="">
  </div>



  <button type="submit" class="btn btn-primary">Send</button>

  {{csrf_field()}}
</form>

<hr>



<h5>La ruta donde no te debe dejar entrar si no iniciar sesión es la siguiente</h5>
<a href="http://127.0.0.1:8000/login/table">http://127.0.0.1:8000/login/table</a>

<hr>
</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->