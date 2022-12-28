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
        		
        	 
        	</div>
        	

            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    
 
                	<form method="PUT" action="{{route('productos.update',$producto->id)}}">
                		@csrf
                		@method('put')
	                	<table class="table table-bordered">
	                		<tbody>
	                			<tr>
	                				<td>Nombre del producto</td>
	                				<td>
	                					<input type="text" required name="nombre" id="nombre" value="{{$producto->nombre}}"> 
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>Precio</td>
	                				<td>
	                					<input type="number"  step="0.01" required name="precio" id="precio" value="{{$producto->precio}}">
	                					
	                				</td>
	                			</tr>
	                			<tr>
	                				<td>Porcentaje de Impuesto</td>
	                				<td>
	                					<input type="number"  step="0.01" required name="impuesto" id="impuesto" value="{{$producto->impuesto}}">
	                					
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