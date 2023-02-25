@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
<h3 title="eloquent">Mysql categorías <small style="font-size: 12px;">bd_categoria.blade.php</small></h3>
<x-flash/>
<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->
<p class="d-flex justify-content-end">   
    

<a href="{{route('bd_categorias_add')}}" class="btn btn-success"> <i class="fas fa-check"></i>Crear</a>
</p>



<div class="table-responsive">


    <table class="table table-bordered table-striped table-hover">
        <thead>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>


            <tbody>

                @foreach ($datos as $item)
                    <tr>

                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>
                      
                        <a href="{{route('bd_categorias_edit',['id'=>$item->id] )}}"><i class="fas fa-edit"></i></a>
                       
                       
                        <a href="javascript:void(0);" 
                        onclick="confirmaAlert('Realmente desea eliminar este registro?','{{route('bd_categorias_delete',['id'=>$item->id])}}')">
                        <i class="fas fa-trash"></i>
                        </a>
                    
                                                                    </td>



                    </tr>
                @endforeach


            </tbody>



        </thead>



    </table>


</div>


</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->