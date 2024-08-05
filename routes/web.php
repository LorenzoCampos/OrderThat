<?php

require_once '../autoload.php';

use Lib\Route;
use App\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);
Route::get('/indexTest', [HomeController::class,'indexTest']);
Route::get('/test', [HomeController::class,'test']);
Route::get('/createProduct', [HomeController::class,'createProduct']);
Route::post('/createProductRequest', [HomeController::class,'createProductRequest']);
// Route::get('/login', [HomeController::class,'index']);
// Route::get('/register', [HomeController::class,'index']);

// Route::get('/product/modify/:id', [HomeController::class,'modify']);
// Route::get('/product/modify/:slug', function ($slug){
//     return $slug;
// });
// Route::get('/product/create', [HomeController::class,'index']);

// Route::get('/contact', function (){
//     return 'HOLA DESDE LA PAGINA CONTACT';
// });

// Route::get('/', function (){
//     return 'HOLA DESDE LA PAGINA ABOUT';
// });

// Route::get('/course/prueba', function (){
//     return "HOLA DESDE LA PAGINA CURSO DE prueba";
// });

// Route::get('/course/:slug', function ($slug){
//     return "HOLA DESDE LA PAGINA course $slug";
// });

// el orden es muy importante
// Route::get('/course/prueba', function (){
//     return "HOLA DESDE LA PAGINA CURSO DE prueba";
// });

Route::dispatch();