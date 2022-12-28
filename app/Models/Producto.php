<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;


    public $table = 'productos';

      protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'precio',
        'impuesto',
         
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'precio' => 'float',
        'impuesto' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'precio' => 'required',
        'impuesto' => 'required'
    ];
}
