@extends('../layouts/frontend')

<!--Para agregar el contenido -->
@section('content')

<main class="container">
    <h3 title="eloquent">Buscador - :{{$datos->count()}} <small style="font-size: 12px;">bd_buscador.blade.php</small></h3>

<!--Codigo php en Blade-->
@php

//print_r($datos);

@endphp
<!--Fin codigo php en Blade-->
    <x-flash/>
<!--Inicio Buscador-->
<div class="clearfix">&nbsp; </div>
<div class="col-6">
<form action="{{route('bd_buscador')}}" method="get">

<div class="input-group mb-3">
  <input type="text"
    class="form-control" name="b" id="b" value="{{$b}}" aria-describedby="helpId">
  <button class="btn btn-outline-secundary"  type="button" id="button-addon2" onclick="buscador();"><i class="fas fa-search"></i></button>
</div>

</form>
</div>


<!--Fin Inicio Buscador-->

    <p class="d-flex justify-content-end">   
    <a href="{{route('bd_productos_add')}}" class="btn btn-success"> <i class="fas fa-check"></i>Crear</a>
    </p>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoría</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Descripción</th>
                    <th>Fecha1</th>
                    <th>Fecha2</th>
                    <th>Fotos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($datos as $item)
                    
                    <tr>
                        <td>{{$item->id}}</td>
                        <td><a href="{{route('bd_productos_categorias',['id'=>$item->categorias->id])}} "> {{$item->categorias->nombre}} </a></td><!--Importante tiene que estar bien definido del modelo-->
                        <td>{{$item->nombre}}</td>
                        <td>€{{number_format($item->precio,0,'','.')}}</td>
                        <td>{{$item->stock}}</td>
                        <td>{{substr($item->descripcion,0,50)}}...</td>
                        <td>{{Helpers::fecha($item->fecha)}}</td>
                        <td>{{Helpers::invierte_fecha($item->fecha)}}</td>

                        <td><a href="{{route('bd_productos_fotos',['id'=>$item->id])}}"><i class="fas fa-camera"></i></a></td>
                        <!--editar registro-->    
                        <td><a href="{{route('bd_productos_edit',['id'=>$item->id]   )}}"><i class="fas fa-edit"></i>
                        <!--Borrar registro-->    
                        </a><a href="javascript:void(0);" onclick="confirmaAlert('Realmente desea eliminar este registro?','{{route('bd_productos_delete',['id'=>$item->id])}}')"><i class="fas fa-trash"></i></a>
                    
                    
                    </td>
                    
                             
                    
                    </tr> 
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->