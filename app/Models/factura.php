<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;

    public function venta(){
        //relacion uno a uno , pero el que lleva el has one es el que no tiene 
        //la llave foranea , segun eloquent
        return $this->hasOne('App\Models\venta');
    }

}
