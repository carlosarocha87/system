@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Orden de Compra') }}</div>

                <div class="card-body">
                    
                	<form method="POST" action="{{ route('compras.store', [$producto->id]) }}">
                		
                	
                      <table class="table table-bordered">
					    <tbody>
					        <tr>
					            <th width="30%" class="bg-light">Nombre</th>
					            <td> 
					            	<input type="text" readonly name="nombre" value="{{$producto->nombre}}">
					            	 </td>
					        </tr>
					        <tr>
					            <th class="bg-light">Precio</th>
					            <td align="right"> {{$producto->precio}}</td>
					        </tr>
					        <tr>
					            <th class="bg-light">Impuesto</th>
					            <td  align="right">

					                {{$impuesto}}

					            </td>
					        </tr>

					        <tr>
					            <th class="bg-light">Total a pagar</th>
					            <td  align="right">

					              <b>{{$total}}</b>  

					            </td>
					        </tr>

					        <tr>
					             
					            <td colspan="2" align="center">

					                <a class="btn btn-sm btn-success" href=" {{ route('compras.store', [$producto->id]) }}">
				                        Confirmar compra
				                    </a>

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