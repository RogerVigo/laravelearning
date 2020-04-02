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

    return view('test', [
        'name' => request('name')
    ]);
});

//Acceso a los valores de configuracion
Route::get('/time', function () {
    return config('app.timezone');
});

//Mostrar datos de un array

//Los datos se recogen con la wildcard y se pasan como parametro de la funcion
Route::get('/post/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Here is my First post',
        'my-second-post' => 'This is my second post'
    ];
//Si no encuentra la key correspondiente, mostrara un error 404
    if (!array_key_exists($post, $posts)) {
        abort(404, 'No post was found');
    }
//Si encuentra la key correspondiente, abrira una vista con el contenido
    return view('post', [
        'post' => $post]);

});

//Usando controlador
Route::get('/post-controller/{post}', 'PostsController@show');
Route::get('/post-controller-two/{post}', 'PostsController2@show');

//Rutas template

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', function () {
    return view('client');
});

Route::get('/about', function () {

    return view('about', ['articles' => App\Article::latest()->get()]);
});

Route::get('/careers', function () {
    return view('career');
});

Route::get('/contact', function () {
    return view('contact');
});
