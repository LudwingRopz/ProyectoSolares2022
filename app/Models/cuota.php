<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuota extends Model
{
    use HasFactory;


    public function ventas(){
        //relacion uno a muchos , la llave de venta se viene a cuotas
        //inversa
        return $this->belongsTo('App\Models\venta');
    }

}
