<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

use App\Models\User;


class VendedorController extends Controller{
    
    public function index(){
        return view('vendedor.index');
    }

    public function Clientes(){
        $user = User::all();
        return view("hola mundo", compact('user'));
 
    }

}



