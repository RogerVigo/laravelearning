<?php

use Illuminate\Support\Facades\Route;

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

Route::get('test', function (){
    return view('test');
});

//Pasar parametro desde la barra de navegador
Route::get('/test/test-1',function (){

    return view('test',[
        'name'=>request('name')
    ]);
});

//Acceso a los valores de configuracion
Route::get('/time',function (){
    return config('app.timezone');
});
