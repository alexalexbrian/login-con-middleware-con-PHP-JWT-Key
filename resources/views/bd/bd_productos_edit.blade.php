@extends('../layouts/frontend')


<!--Para agregar el contenido -->
@section('content')

<main class="container">
    <h3>BD edit Productos    <small style="font-size: 12px;">bd_productos_edit.blade.php</small></h3>
<x-flash/>
<!--Codigo php en Blade-->
@php

//print_r($categorias);

@endphp
<!--Fin codigo php en Blade-->


<form action="{{route('bd_productos_edit_post',['id'=>$producto->id])}}" method="post">





<div class="mb-3">
    <label for="categorias_id" class="form-label">Category</label>
    <select class="form-select form-select-lg" name="categorias_id" id="categorias_id"> 
            @foreach ($categorias as $item)

                                                  <!--Importante para validar los select con php-->
            <option id="" value="{{$item->id}}"   {{($producto->categorias_id == $item->id) ? 'selected':''}}>{{$item->nombre}}</option>


            @endforeach
    </select>
</div>





<div class="mb-3">
  <label for="" class="form-label">Name:</label>
  <input type="text"
    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" value="{{$producto->nombre}}">
  <small id="helpId" class="form-text text-muted">Write the name</small>
</div>


<div class="mb-3">
    <label for="precio" class="form-label">Price:</label>
    <input type="precio" class="form-control" name="precio" id="precio" aria-describedby="helpId" value="{{$producto->precio}}" onkeypress="return soloNumeros(event)">
    <small id="helpId" class="form-text text-muted">Write the price</small>
</div>
  


<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <select class="form-select form-select-lg" name="stock" id="stock">
      
        @for ($i = 0; $i < $count=100; $i++)  
          
                                           <!--Importante para validar los select con php-->
        <option id="{{$i}}" value="{{$i}}" {{($producto->stock == $i) ? 'selected':'' }}>{{$i}}</option>
        @endfor
    
    </select>
</div>




<div class="mb-3">
  <label for="descripcion" class="form-label"></label>
  <textarea class="form-control" name="descripcion" id="descripcion" rows="3">{{$producto->descripcion}}</textarea>
</div>



<input type="submit" value="Save" class="btn btn-primary">
{{csrf_field()}}
<hr>
</form>




</main>
<!--Fin Exportamos heredamos el contenido del la hoja frontend.blade.php -->
@endsection <!-- Importante esto es del layouts -->