@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h2> Error 404 - Página no encontrada</h2>
<img src="{{asset('/img/404.webp')}}" width="200" alt="404" />
</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->