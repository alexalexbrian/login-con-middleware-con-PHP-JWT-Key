@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h2> Error 419</h2>
<p>Se trata de que enviamos un formulario pero en lugar de que los datos se guarden, aparece un error 419 y dice “Page expired”. El problema es que no estamos enviando el token CSRF con el formulario. Es decir, tenemos algo así: Podemos tener varios campos, pero dentro del formulario debe estar un input hidden con el token CSRF para prevenir ataques.</p>
<img src="{{asset('/img/404.webp')}}" width="200" alt="404" />
</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->