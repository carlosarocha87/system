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
        		
        		<a href="{{ route('productos.create') }}" class="btn btn-primary float-rigth">Nuevo Producto</a>
        	
        	</div>
        	

            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    

                	<form method="POST" action="{{route('productos.store')}}">
                		@csrf
                		@method('post')
	                	<table class="table table-bordered">
	                		<tbody>
	                			<tr>
	                				<td>Nombre del producto</td>
	                				<td>
	                					<input type="text" required name="nombre" id="nombre">
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>Precio</td>
	                				<td>
	                					<input type="number"  step="0.01" required name="precio" id="precio">
	                					
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>Porcentaje de Impuesto</td>
	                				<td>
	                					<input type="number"  step="0.01" required name="impuesto" id="impuesto">
	                					
	                				</td>
	                			</tr>

	                			<tr>
	                				 
	                				<td colspan="2" align="center">
	                					<button class="btn btn-success" type="submit">
	                						Guardar
	                					</button>
	                					
	                				</td>
	                			</tr>
	                		</tbody>
	                	</table>
	                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection