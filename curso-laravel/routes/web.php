<?php

use App\Notifications\SlackNotification;
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

Route::get('test', function () {
    return view('test');
});

//Pasar parametro desde la barra de navegador
Route::get('/test/test-1', function () {

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

    return view('about', ['articles' => App\Article::take(3)->latest()->get()]);
});

Route::get('/articles', 'ArticlesController@index')->name('article.index');
//REST
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');


//Ruta a articulos
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::put('/articles/{article}', 'ArticlesController@update');


Route::get('/careers', function () {
    return view('career');
});

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payments/create', 'PaymentController@create')->middleware('auth');
Route::post('payments', 'PaymentController@store')->middleware('auth');
Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('/home/slack', function () {
    $user = App\User::first();
    $user->notify(new SlackNotification());
    return redirect()->to('/');
});

