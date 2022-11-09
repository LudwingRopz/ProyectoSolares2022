<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;



use App\Http\Controllers\RolController;

use App\Http\Controllers\ClienteController;


use App\Http\Controllers\VendedorController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', function () { return view('home');});



/*Rutas para inicio de session */
/*Ruta de registro de usuario*/
Route::get('/register',[RegisterController::class, 'create'])->middleware('guest')->name('register.index');
Route::post('/register',[RegisterController::class, 'store'])->name('register.store');
/*ruta de inicio de la session */
Route::get('/login',[SessionsController::class, 'create'])->middleware('guest')->name('login.index');
Route::post('/login',[SessionsController::class, 'store'])->name('login.store');
/*Ruta de finalizar session */
Route::get('/logout',[SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

/*///////////////////////////////////
////Rutas para el administrador////// 
/////////////////////////////////////*/

Route::get('/admin',[AdminController::class,'index'])->middleware('auth.admin')->name('admin.index');

/*/////////// CLIENTE////////////////// */

/*Rutas para que el administrador registre a un cliente*/
Route::get('/admin/registrarCliente',[AdminController::class,'registrarC'])->middleware('auth.admin')->name('admin.registrarcliente');

Route::get('/admin/registrarCliente/crear',[AdminController::class,'createCliente'])->middleware('auth.admin')->name('admin.crearcliente');
Route::post('/admin/registrarCliente/crear/create',[AdminController::class,'storedCliente'])->middleware('auth.admin')->name('admin.storedCliente');

/*Ruta para que el administrador elimine a un cliente */
Route::get('/admin/registrarCliente/deleteC/{id}',[AdminController::class,'destroyCliente'])->middleware('auth.admin')->name('admin.destroycliente');

/*Ruta para que el administrador edite los datos de un cliente */
Route::get('/admin/registrarCliente/editarC/{id}',[AdminController::class,'editCliente'])->middleware('auth.admin')->name('admin.editcliente');
Route::post('/admin/registrarCliente/editarC1/{id}',[AdminController::class,'updateCliente'])->middleware('auth.admin')->name('admin.updatecliente');


/*/////////// USUARIO /////////////*/

/*Rutas para que el administrador registre a un Usuario*/
Route::get('/admin/registrarUsuario',[AdminController::class,'registrarU'])->middleware('auth.admin')->name('admin.registrarusuario');
Route::get('/admin/registrarUsuario/crear',[AdminController::class,'createUsuario'])->middleware('auth.admin')->name('admin.crearusuario');
Route::post('/admin/registrarUsuario/crear/create',[AdminController::class,'storedUsuario'])->middleware('auth.admin')->name('admin.storedusuario');

/*Ruta para que el administrador elimine a un Usuario */
Route::get('/admin/registrarUsuario/deleteU/{id}',[AdminController::class,'destroyUsuario'])->middleware('auth.admin')->name('admin.destroyusuario');

/*Ruta para que el administrador edite los datos de un Usuario*/
Route::get('/admin/registrarUsuario/editarV/{id}',[AdminController::class,'editUsuario'])->middleware('auth.admin')->name('admin.editusuario');
Route::post('/admin/registrarUsuario/editarV1/{id}',[AdminController::class,'updateUsuario'])->middleware('auth.admin')->name('admin.updateusuario');


/*///////// Rutas Rol/////*/
// LISTAR ROLES
Route::get('/admin/roles',[RolController::class,'ListarRol'])->middleware('auth.admin')->name('admin.roles');
// CREAR ROLES
Route::get('/admin/registrarRol/crear',[RolController::class,'CreateRol'])->middleware('auth.admin')->name('admin.crearrol');
Route::post('/admin/registrarRol/crear/create',[RolController::class,'storedRol'])->middleware('auth.admin')->name('admin.storedRoles');
// EDITAR ROLES
Route::get('/admin/registrarRol/editarC/{id}',[RolController::class,'editRol'])->middleware('auth.admin')->name('admin.editRol');


/*///////// Rutas administrar clientes/////*/

Route::get('/admin/registrarClientes',[ClienteController::class,'ListarC'])->middleware('auth.admin')->name('admin.listarcliente');

Route::get('/admin/registrarClientes/crear',[ClienteController::class,'createCliente'])->middleware('auth.admin')->name('admin.crearclientes');
Route::post('/admin/registrarClientes/crear/create',[ClienteController::class,'storedCliente'])->middleware('auth.admin')->name('admin.storedClientes');

/*Ruta para que el administrador elimine a un cliente */
Route::get('/admin/registrarClientes/deleteC/{id}',[ClienteController::class,'destroyCliente'])->middleware('auth.admin')->name('admin.destroyclientes');

/*Ruta para que el administrador edite los datos de un cliente */
Route::get('/admin/registrarClientes/editarC/{id}',[ClienteController::class,'editCliente'])->middleware('auth.admin')->name('admin.editclientes');
Route::post('/admin/registrarClientes/editarC1/{id}',[ClienteController::class,'updateCliente'])->middleware('auth.admin')->name('admin.updateclientes');








/*/////////////////////////////////
////////// Rutas del producto//////
/////////////////////////////////// */
Route::get('/admin/GestionarProducto',[ProductoController::class,'index'])->middleware('auth.admin')->name('admin.indexproducto');
Route::get('/admin/registrarProducto',[ProductoController::class,'registrarProducto'])->middleware('auth.admin')->name('admin.registrarproducto');
Route::get('/admin/registrarProducto/create',[ProductoController::class,'createProducto'])->middleware('auth.admin')->name('admin.crearproducto');
Route::post('/admin/registrarProducto/crear/create',[ProductoController::class,'storedProducto'])->middleware('auth.admin')->name('admin.storedproducto');

/*Ruta para que el administrador elimine a un producto */
Route::get('/admin/registrarProducto/deleteP/{id}',[ProductoController::class,'destroyProducto'])->middleware('auth.admin')->name('admin.destroyproducto');

/*Ruta para que el administrador edite un producto */
Route::get('/admin/registrarProducto/editarP/{id}',[productoController::class,'editProducto'])->middleware('auth.admin')->name('admin.editproducto');
Route::post('/admin/registrarProducto/editarP1/{id}',[productoController::class,'updateProducto'])->middleware('auth.admin')->name('admin.updateproducto');


/*/////////////////////////////////
////////// Rutas de categorias//////
/////////////////////////////////// */

Route::get('/admin/GestionarProducto/Categoria',[CategoriaController::class,'indexCategoria'])->middleware('auth.admin')->name('admin.indexcategoria');
Route::get('/admin/GestionarProducto/Categoria/Registrar',[CategoriaController::class,'createCategoria'])->middleware('auth.admin')->name('admin.crearcategoria');
Route::post('/admin/GestionarProducto/Categoria/Registrar/created',[CategoriaController::class,'storedCategoria'])->middleware('auth.admin')->name('admin.storedcategoria');
//eliminar categoria
Route::get('/admin/GestionarProducto/Categoria/Eliminar/{id}',[CategoriaController::class,'destroyCategoria'])->middleware('auth.admin')->name('admin.destroycategoria');
//editar categoria
Route::get('/admin/GestionarProducto/Categoria/Editar/{id}',[CategoriaController::class,'editCategoria'])->middleware('auth.admin')->name('admin.editarcategoria');
Route::post('/admin/GestionarProducto/Categoria/Editar1/{id}',[CategoriaController::class,'updateCategoria'])->middleware('auth.admin')->name('admin.updatecategoria');









/*/////////////////////////////////
////////// Rutas de Vendedor//////
/////////////////////////////////// */
Route::get('/Home/Vendedor',[VendedorController::class,'index'])->middleware('auth.admin')->name('vendedor.index');


