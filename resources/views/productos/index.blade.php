@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        	@if(session('success'))
        	<div class="alert alert-success">
        			{{session('success')}}
        	</div>
        	
        	@endif

        	<div align="right" class="pb-2">
        		@can('productos.create')
        		<a href="{{ route('productos.create') }}" class="btn btn-primary float-rigth">Nuevo Producto</a>
        		@endcan
        	</div>
        	

            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    

                     
                    <table class="table table-striped table-bordered table-grow" id="generic-table" style="width:100%">
					    <thead>
					    <tr>
					        <th>ID</th>
					        <th>Nombre</th>
					        <th>Precio base</th>
					        <th>% Impuesto</th>
					        <th>Total</th>
					       
					        <th>Acciones</th>
					    </tr>
					    </thead>
					    <tbody>
					    @foreach($productos as $producto)
					        <tr>
					            <td>{{ $producto->id }}</td>
					            <td>{{ $producto->nombre }}</td>
					            <td>{{ $producto->precio }}</td>
					   
					            <td> 

					            	@php
					            		$impuesto=round(($producto->impuesto *$producto->precio)/100, 2);

					            	@endphp
					            	{{$impuesto}}
					            </td>
					            <td> 

					            	@php
					            		$total= $producto->precio+ $impuesto;

					            	@endphp
					            	{{$total}}
					            </td>
					            <td>
					               
					                <a class="btn btn-sm btn-info" href=" {{ route('compras.show', [$producto->id]) }}">
				                        Comprar
				                    </a>
					                   

				                    <!--<a class="btn btn-sm btn-secondary" href=" {{ route('productos.edit', [$producto->id]) }}">
				                        Editar
				                    </a>-->

				                     
					                     
					                
					            </td>
					        </tr>
					    @endforeach
					    </tbody>
					</table>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection