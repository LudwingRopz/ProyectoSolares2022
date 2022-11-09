<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\rol;

class RolController extends Controller
{
    
    public function ListarRol(){
        $rols = rol::all();
        return view('rol.rolregister', compact('rols'));
        
    }

    /*Manda al view crearCliente */
    public function CreateRol(){
        return view('rol.CrearRol');
    }



    /*Guarda los datos del Rol */
    public function storedRol(){
        $this->validate(request(),['descripcion'=>'required']);


        $user = rol::create(request(['descripcion']));
       
        
        $user->save();
        return redirect()->route('admin.roles');     
    }

    /*////// Elimina a un cliente //// */

    public function destroyRol($id){
        $user = rol::find($id);
        $user->delete();
        return redirect()->route('admin.roles');
    }

    /*///// Edita un cliente////// */

    public function editRol($id){
        $user = rol::find($id);
        return view('rol.editarRol',compact('user'));
    }

    /* cambia los datos al editar presionando el button */
    public function updaterol(Request $request, $id){
        $user = rol::find($id);
        $user->descripcion = $request->descripcion;
       
        $user->save();
        return redirect()->route('admin.roles');

    }


}
