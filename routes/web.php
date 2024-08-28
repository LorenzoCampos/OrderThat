<?php

require_once '../autoload.php';

use Lib\Route;
use App\Controllers\HomeController;
use App\Controllers\UserController;

// Ruta para el index
Route::get('/OrderThat/public/', [HomeController::class,'index']);

// Ruta para testear
Route::get('/OrderThat/public/indexTest', [HomeController::class,'indexTest']);

// Rutas para la creacion del producto
Route::get('/OrderThat/public/createProduct', [HomeController::class,'createProduct']);
Route::post('/OrderThat/public/createProductRequest', [HomeController::class,'createProductRequest']);

// Rutas para la modificacion del producto
Route::get('/OrderThat/public/editProduct:id', [HomeController::class,'editProduct']);
Route::post('/OrderThat/public/editProductRequest:id', [HomeController::class,'editProductRequest']);

// Rutas para el carrito
Route::get('/OrderThat/public/cart', [HomeController::class,'cart']);
Route::post('/OrderThat/public/cartRequest', [HomeController::class,'cartRequest']);


// Rutas para el detalle del producto
Route::get('/OrderThat/public/detailProduct/:id', [Homecontroller::class,'detailProduct']);

//  -------------------------------------------------------------------------------------------------------------------------------------------------------------

// Rutas para el Login
Route::get('/OrderThat/public/login', [UserController::class,'login']);
Route::post('/OrderThat/public/loginRequest', [UserController::class,'loginRequest']);

// Rutas para el Registro
Route::get('/OrderThat/public/register', [UserController::class,'register']);
Route::post('/OrderThat/public/registerRequest', [UserController::class,'registerRequest']);

// Ruta para el perfil
Route::get('/OrderThat/public/myAccount', [UserController::class,'myAccount']);
Route::post('/OrderThat/public/myAccountRequest', [UserController::class,'myAccountRequest']);
Route::get('/OrderThat/public/changePassword', [UserController::class,'changePassword']);

// Ruta para la lista de direcciones
Route::get('/OrderThat/public/myAddress', [UserController::class,'myAddress']);
Route::get('/OrderThat/public/newAddress', [UserController::class,'newAddress']);
Route::get('/OrderThat/public/editAddress:id', [UserController::class,'editAddress']);
Route::post('/OrderThat/public/editAddressRequest:id', [UserController::class,'editAddressRequest']);
Route::post('/OrderThat/public/newAddressRequest', [UserController::class,'newAddressRequest']);
Route::get('/OrderThat/public/deleteAddress/:id', [UserController::class,'deleteAddress']);

// Ruta para los metodos de pago
Route::get('/OrderThat/public/myPaymentMethods', [UserController::class,'myPaymentMethods']);


// Ruta para cerrar sesion
Route::get('/OrderThat/public/logout', [UserController::class,'logout']);

// ------------------------------------------------------------------------------------------------------------------------------------------------------------

// Route::get('/OrderThat/public/', function (){
//     return "HOLA DESDE LA PAGINA CURSO DE prueba";
// });

// Route::get('/course/:slug', function ($slug){
//     return "HOLA DESDE LA PAGINA course $slug";
// });

Route::dispatch();