@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Factura') }}</div>

                <div class="card-body">
                    
                 
                      <table class="table table-bordered">
					    <tbody>

					    	<tr>
					            <th width="20%" class="bg-light">Nro. Factura</th>
					            <td> 
					            	
					            	{{$factura[0]->facturas_id}} </td>
					        
					            <th width="20%" class="bg-light">Cliente</th>
					            <td> 
					            	{{$factura[0]->name}}
					            </td>
					        </tr>

					    </tbody>
					</table>


					<table class="table table-bordered">
					    <tbody>

					    	<tr>
					            <th width="20%" class="bg-light">Producto</th>
					            <th width="20%" class="bg-light">Precio</th>
					            <th width="20%" class="bg-light">Impuesto</th>
					            <th width="20%" class="bg-light">Sub-totales</th>

					        </tr>
					        @php
					            $total=0;
					            $totalImpuestos=0;
					            $subtotales=0;
					        @endphp

					        @foreach($factura as $fact)
					        <tr>
					            
					            <td> 
					            	
					            	{{$fact->producto}}
					            </td>
					         
					            <td> 
					            	{{$fact->precio}}
					            	@php
					            	$subtotales+=$fact->precio;
					            	@endphp

					            </td>
					            <td> 
					            	@php
					            		$impuesto=round(($fact->impuesto*$fact->precio)/100, 2);

					            		$totalImpuestos+=$impuesto;
					            	@endphp
					            	{{$impuesto}}
					            </td>
					            <td> 
					            	 @php
					            		 

					            		$subtotal=$fact->precio+$impuesto;
					            		$total+=$subtotal;



					            	@endphp
					            	{{$subtotal}}
					            </td>
					        </tr>
					        @endforeach
					    </tbody>
					    <tfoot>
					    	<tr>
					    		<th colspan="4"></th>
					    		 
					    	</tr>
					    	<tr>
					    		<th colspan="3">Sub-total</th>
					    		<th>
					    			{{$subtotales}}
					    		</th>
					    		 
					    	</tr>
					    	<tr>
					    		<th colspan="3">Total de Impuestos</th>
					    		<th>
					    			{{$totalImpuestos}}
					    		</th>
					    		 
					    	</tr>
					    	<tr>
					    		<th colspan="3">Total a pagar</th>
					    		<th>
					    			{{$total}}
					    		</th>
					    	</tr>
					    </tfoot>

					</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection