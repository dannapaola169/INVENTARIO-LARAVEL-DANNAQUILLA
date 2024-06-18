@extends('layout.plantilla')

@section('titulo','mostrar')

@section('contenido')

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Los datos del producto son:</h1>
    </div>
</header> 
<!-- component -->

<div class="container m-auto size-11/12">


<div>

  <div class="">
    <dl class="">
      <div class="">
        <dt class="">ID:</dt> 
        <dd class="">{{$producto->id}}</dd> 
      </div>
      <div class="">
        <dt class="">Nombre:</dt>
        <dd class="">{{$producto->nombre}}</dd>
      </div>
      <div class="">
        <dt class="">Precio:</dt>
        <dd class="">{{$producto->precio}}</dd>
      </div>
      <div class="">
        <dt class="">Descripción:</dt>
        <dd class="">{{$producto->descripcion}}</dd>
      </div>
      <div class="">
        <dt class="">Categoria:</dt>
        <dd class="">{{$producto->categoria}} - {{$categoria->nombre}}</dd>
      </div>

    </dl>
  </div>
</div>


<br>
    <button class=""><a href="{{route('producto.principal') }}">Volver</a></button>  

<button class=""><a href="{{route('producto.editar', $producto)}}">Editar</a></button>  
 
<button class=""><a href="{{route('producto.crear') }}">Nuevo registro</a></button>

    <div class="container m-auto size-11/12">


        
@endsection
