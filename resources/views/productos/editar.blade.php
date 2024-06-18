@extends('layout.plantilla')

@section('titulo', 'editar')

@section('contenido')
     



<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Aqui se editara este producto</h1>
    </div>
</header> 

<div class="container m-auto size-11/12">

<br>

<div class="">
	<div class="">
		 

		<form action="{{route('producto.update', $producto)}}" method="POST">
@csrf
@method('put') 


<h1 class="">Modifique los datos que necesiten {{$producto->id}}</h1>
			<div class="mb-4">
				<label class="">Nombre del producto
				<input type="text" name="nombre" value="{{$producto->nombre}}" class="" placeholder="Ingrese el nombre">
            </label>    
            </div>
			<div class="mb-4">
				<label class="">Precio
				<input type="text" name="precio" value="{{$producto->precio}}" class="" placeholder="Ingrese el precio">
            </label>  

                <label class="">Descripción
				<input type="text" name="descripcion" value="{{$producto->descripcion}}"  class="" placeholder="Ingrese la descripción">
			</label>

                <label class="">Categoria
				<input type="text" name="categoria" value="{{$producto->categoria}}" class="" placeholder="Ingrese la categoria">
            </label>

			<label class="">Categorias_Tabla
				<select name="categoria_id" class="" placeholder="Ingrese la categoria">
					<option value="{{$categoria_actual->id}}">{{$categoria_actual->nombre}}</option>

					@foreach ($categorias as $cat)


					<option value="{{$cat->id}}">{{$cat->nombre}}</option>
		
				
		
					@endforeach
				</select>
				</label>
	
			</div>

            <input type="submit" class="" value="Guardar">
			
		</form>
        <br>
        <button class=""><a href="{{route('producto.principal') }}">Cancelar</a></button>
       
            <br>
        
	</div>
</div>




@endsection