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
        	@can('facturas.actualizar')
        	<div align="right" class="pb-2">
        		
        		<a href="{{ route('ActualizarCompras') }}" class="btn btn-primary float-rigth">Actualizar listado de facturas</a>
        	
        	</div>
        	

            <div class="card">
                <div class="card-header">{{ __('Facturas emitidas') }}

                	
                </div>

                <div class="card-body">
                    

                     
                    <table class="table table-striped table-bordered table-grow" id="generic-table" style="width:100%">
					    <thead>
					    <tr>
					        <th width="25%">ID factura</th>
					        <th>Usuario</th>
					         
					       
					        <th>Acciones</th>
					    </tr>
					    </thead>
					    <tbody>
					    @foreach($facturas as $factura)
					        <tr>
					            <td> {{ $factura->id }}</td>
					            <td>{{ $factura->name }}</td>
					            
					            <td width="20%">
					               
					                <a class="btn btn-sm btn-info" href=" {{ route('facturas.show', [$factura->id]) }}">
				                        Consultar
				                    </a>
					                   

				                    
					                     
					                
					            </td>
					        </tr>
					    @endforeach
					    </tbody>
					</table>




                </div>
            </div>

           @endcan
        </div>
    </div>
</div>
@endsection