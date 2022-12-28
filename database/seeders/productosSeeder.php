<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testsystem.productos')->insert([
            [
                'id'=>1,
                'nombre'=>'Producto 1',
                'precio'=>123.45,
                'impuesto'=>5,
                'created_at'=>now()
            ],
            [
                'id'=>2,
                'nombre'=>'Producto 2',
                'precio'=>45.65,
                'impuesto'=>15,
                'created_at'=>now()
            ],
            [
                'id'=>3,
                'nombre'=>'Producto 3',
                'precio'=>39.73,
                'impuesto'=>12,
                'created_at'=>now()
            ],
            [
                'id'=>4,
                'nombre'=>'Producto 4',
                'precio'=>250.00,
                'impuesto'=>8,
                'created_at'=>now()
            ],
            [
                'id'=>5,
                'nombre'=>'Producto 5',
                'precio'=>59.35,
                'impuesto'=>10,
                'created_at'=>now()
            ],
            
            
            
            

        ]);
    }
}
