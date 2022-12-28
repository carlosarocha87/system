<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\Factura;

use Illuminate\Http\Request;
 
class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "index compras";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$producto = Producto::find($request->producto);

              $compra= [
                    'users_id' =>  auth()->id(),
                    'productos_id' => $request->producto,
                    'facturado'    => false,
                    'facturas_id'  => 0,
                ];
        Compra::create($compra);

   

        return redirect(route('productos.index'))->with('success','Compra realizada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show($idProducto)
    {


        $producto = Producto::find($idProducto);


        $impuesto=round(($producto->impuesto*$producto->precio)/100, 2);

        $total=$producto->precio + $impuesto;
        return view('compras.show')
            ->with('producto', $producto)
            ->with('impuesto', $impuesto)
            ->with('total', $total)
            ;
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Compra $compra)
    {
         
    }

     public function ActualizarCompras()
    {
         $compras = Compra::where('facturado',false)->orderBy('users_id', 'ASC')
             ->get();

        if(count($compras)>0){
            $uid=0;
            foreach ($compras as $key => $compra) {
                
                if($uid!=$compra->users_id){
                    $uid=$compra->users_id;

                    $factura= [
                            'users_id' => $compra->users_id,
                    ];
                    $respF=Factura::create($factura);
                    print_r($respF);
                }

                $comprax=Compra::findOrFail($compra->id);
                    
                $comprax->facturado=true;
                $comprax->facturas_id=$respF->id;
                $resp=$comprax->save();

                 
            }

        return redirect(route('facturas.index'))->with('success','Actulización de listado de facturas realizado exitosamente.');
        }else{
            return redirect(route('facturas.index'))->with('success','No existen comprar con facturas pendientes actualmente.');
        }


     //   return redirect(view('facturas.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
