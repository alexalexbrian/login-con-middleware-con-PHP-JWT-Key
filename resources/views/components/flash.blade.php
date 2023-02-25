<!-- /resources/views/post/create.blade.php -->
<!-- Inicio Mostrar errores de los formulario - Create Post Form -->
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!-- Mostrar errores de los formulario - Create Post Form -->



 <!--Inicio para hacer flash-->
@if(Session::has('mensaje')) 
<div class="alert alert-{{ Session::get('css') }} alert-dismissible fade show" role="alert">
   
        {{ Session::get('mensaje') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
 <!--Fin Inicio para hacer flash-->


  <!--Inicio para hacer flash-->
@if(Session::has('mensaje1')) 
<div class="alert alert-{{ Session::get('css1') }} alert-dismissible fade show" role="alert">
   
        {{ Session::get('mensaje1') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
 <!--Fin Inicio para hacer flash-->

