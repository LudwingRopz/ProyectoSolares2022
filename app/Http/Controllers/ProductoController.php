<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\User;
use App\Models\categoria;



class ProductoController extends Controller{

    public function index(){
        return view('producto.index');
    }
    

    public function registrarProducto(){
        $producto = producto::all();
        $categoria = categoria::all();
     
        return view('producto.listaproducto', compact('producto','categoria'));
    }

    public function createProducto(){
        $categoria = categoria::all();
      
        return view('producto.crearProducto', compact('categoria','presentacion','marca'));
    }
    
    public function storedProducto(Request $request){
        $this->validate(request(),['nombre'=>'required','descripcion'=>'required','precio'=>'required','stock'=>'required','categoria_id'=>'required','presentacion_id'=>'required','marca_id'=>'required']);
        $product = producto::create(request(['nombre','descripcion','precio','stock','categoria_id','presentacion_id','marca_id']));



        $product->save();
        return redirect()->route('admin.registrarproducto'); 
    }
    // eliminar un producto
    public function destroyProducto($id){
        $producto = producto::find($id);

      

        $producto->delete();
        return redirect()->route('admin.registrarproducto');
    }

    //editar un producto

    public function editProducto($id){
        $producto = producto::find($id);
        $categoria = categoria::all();
  
        return view('producto.editarproducto',compact('producto','categoria','presentacion','marca'));
    }

    /* cambia los datos al editar presionando el button */
    public function updateProducto(Request $request, $id){
        $this->validate(request(),['nombre'=>'required','descripcion'=>'required','precio'=>'required','stock'=>'required','categoria_id'=>'required','presentacion_id'=>'required','marca_id'=>'required']);
        $product = producto::find($id);
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->stock = $request->stock;
        $product->categoria_id = $request->categoria_id;
        $product->presentacion_id = $request->presentacion_id;
        $product->marca_id = $request->marca_id;

        
        
        $product->save();
        return redirect()->route('admin.registrarproducto');

    }
    






}
