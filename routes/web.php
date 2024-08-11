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
Route::get('/OrderThat/public/editProduct/:id', [HomeController::class,'editProduct']);
Route::post('/OrderThat/public/editProductRequest/:id', [HomeController::class,'editProductRequest']);

// ------------------------------------------------------------------------------------------------------------------------------------------------------------

// Rustas para el Login
Route::get('/OrderThat/public/login', [UserController::class,'login']);
Route::post('/OrderThat/public/loginRequest', [UserController::class,'loginRequest']);

// Rutas para el Registro
Route::get('/OrderThat/public/register', [UserController::class,'register']);
Route::post('/OrderThat/public/registerRequest', [UserController::class,'registerRequest']);

// Ruta para el perfil
Route::get('/OrderThat/public/myAccount', [UserController::class,'myAccount']);
Route::post('/OrderThat/public/myAccountRequest', [UserController::class,'myAccountRequest']);
Route::get('/OrderThat/public/changePassword', [UserController::class,'changePassword']);


// Ruta para cerrar sesion
Route::get('/OrderThat/public/logout', [UserController::class,'logout']);

// ------------------------------------------------------------------------------------------------------------------------------------------------------------

// Route::get('/course/prueba', function (){
//     return "HOLA DESDE LA PAGINA CURSO DE prueba";
// });

// Route::get('/course/:slug', function ($slug){
//     return "HOLA DESDE LA PAGINA course $slug";
// });

Route::dispatch();