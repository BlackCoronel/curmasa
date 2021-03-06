<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipo', function(){
    return view('layouts.equipo');
});

Route::get('/localizacion', function(){
   return view('layouts.donde_estamos');
});

Route::get('/contacto', function(){
   return view('layouts.contacto');
});

Route::get('/proveedores',function(){
   return view('layouts.proveedores');
});

Route::get('/productos','categoriasController@index');

Route::get('/productos/{$categoria}', 'categoriasController@productos');