<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
<title>Test laravel</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/css/jquery-confirm.css')}}" rel="stylesheet">
<link href="{{asset('/fontawesome-free-6.2.1-web/css/all.css')}}" rel="stylesheet">
<link href="{{asset('/css/jquery.alerts.min.css')}}" rel="stylesheet">
@stack('css') <!---->
    <!-- Favicons     -->
<link rel="icon" href="{{asset('/img/fix.png')}}">
    <!-- Fin Favicons -->
<meta name="theme-color" content="#712cf9">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/blog.css')}}" rel="stylesheet">

</head>

<body>



<!--Inicio Menu-->    
<div class="container">
  <header class="blog-header lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">

        <!--si el usuario esta logeado--> 
      
        @if(Auth::check())
        <a class="link-secondary" style="text-decoration: none;" href="javascript:void(0);">Hola!! {{Auth::user()->name}}</a>
        <!--si NO ESTA logeado MOSTRAMOS ESTO--> 
        @else
        <a class="link-secondary" href="">.</a>
        @endif

 
  



      



        


      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="">
          <img src="{{asset('/img/fix.png')}}" width="40" alt="" /></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
       
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
            <title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>


        @if (Auth::check())
        <a class="btn btn-sm btn-outline-secondary" href="{{route('loginOut')}}">Sign off</a>
        @else
        <a class="btn btn-sm btn-outline-secondary" href="{{route('acceso_login')}}">Sign up</a>
        @endif



   
   





       




      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="{{route('login')}}">Home</a>
    </nav>
  </div>
</div>
<!-- Fin Inicio Menu-->   





<!--Inicio frontend.blade.php -->
<main class="container">
@yield('content')  <!--El contenido de las vistas va a cargar aquí, se tiene que usar el content -->
</main>
<!--Fin Inicio frontend.blade.php -->



<!--Footer-->
<footer class="blog-footer">
  <p>Alex @<a href="#">developer</a> by <a href="#">@alex</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
<!--Fin Footer-->


<script src="{{asset('/js/jquery-3.6.3.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/jquery-confirm.js')}}"></script>
<script src="{{asset('/js/jquery-alerts.min.js')}}"></script>
<script src="{{asset('/js/funciones.js')}}"></script>
@stack('js') <!---->
</body>
</html>