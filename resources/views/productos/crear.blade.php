@extends('layout.plantilla')

@section('titulo', 'crear')

@section('contenido')

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Crear un nuevo producto</h1>
    </div>
</header> 

<div class="container m-auto size-11/12">

<br>

<div class="">  
	<div class="">
		<h1 class="">NUEVO REGISTRO</h1>

		<form action="{{route('producto.store')}}" method="POST">
            @csrf
			<div class="mb-4">
				<label class="">Nombre
				<input type="text" name="nombre" class="" placeholder="Ingrese el nombre">
            </label>    
            </div>

			<div class="mb-4">
				<label class="">Precio
				<input type="text" name="precio" class="" placeholder="Ingrese el precio">
            </label>  

                <label class="">Descripción
				<input type="text" name="descripcion" class="" placeholder="Ingrese la descripción">
			</label>

                <label class="">Categoria
				<input type="text" name="categoria" class="" placeholder="Ingrese la categoria">
            </label>


			<label class="">Categorias_Tabla
			<select name="categoria_id" class="" required>
				<option value="">Seleccione una categoria</option>
			
			
			@foreach ($categorias as $cat)


			<option value="{{$cat->id}}">{{$cat->nombre}}</option>

		

			@endforeach



			</select>
			</label>

			</div>


			<button type="submit" class="">Insertar datos</button>
		</form>
        <br>
        <button class=""><a href="{{route('producto.principal') }}">Volver</a></button>
            <br>
        
	</div>
</div>




@endsection
