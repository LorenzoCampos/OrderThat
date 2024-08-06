<?php

require_once '../autoload.php';

use Lib\Route;
use App\Controllers\HomeController;
use App\Controllers\UserController;

Route::get('/OrderThat/public/', [HomeController::class,'index']);
Route::get('/OrderThat/public/indexTest', [HomeController::class,'indexTest']);
Route::get('/OrderThat/public/test', [HomeController::class,'test']);
Route::get('/OrderThat/public/createProduct', [HomeController::class,'createProduct']);
Route::post('/OrderThat/public/createProductRequest', [HomeController::class,'createProductRequest']);


Route::get('/OrderThat/public/login', [UserController::class,'login']);
Route::post('/OrderThat/public/loginRequest', [UserController::class,'loginRequest']);
Route::get('/OrderThat/public/register', [UserController::class,'register']);
Route::post('/OrderThat/public/registerRequest', [UserController::class,'registerRequest']);
Route::get('/OrderThat/public/myAccount', [UserController::class,'myAccount']);
// Route::get('/course/prueba', function (){
//     return "HOLA DESDE LA PAGINA CURSO DE prueba";
// });

// Route::get('/course/:slug', function ($slug){
//     return "HOLA DESDE LA PAGINA course $slug";
// });

Route::dispatch();