<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

      public $table = 'facturas';

      protected $dates = ['deleted_at'];


    public $fillable = [
        'users_id',
        'productos_id'
        
         
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer',
        'productos_id' => 'integer'
 
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'users_id' => 'required',
        'productos_id' => 'required'
 
    ];
   
}
