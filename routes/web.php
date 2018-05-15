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

Route::get('/', 'Principal\FrontController@index');
Route::get('contacto', 'Principal\FrontController@contacto');
Route::get('reviews', 'Principal\FrontController@reviews');
Route::get('admin', 'Principal\FrontController@admin');
Route::get('controlador/{nombre}', 'Prueba\PruebaController@nombre');
Route::get('controlador/{nombre}', 'Prueba\PruebaController@nombre');
Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LogController');
Route::resource('genero', 'GeneroController');
Route::get('generos', 'GeneroController@listing');
Route::get('logout', 'LogController@logout');

Route::get('/login', array('as' => 'login', 'uses' => 'Principal\FrontController@getLogin'));
Route::post('/login', array('as' => 'login', 'uses' => 'Principal\FrontController@postLogin'));
/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('prueba/{nombre}', function ($nombre) {
    return "Hola desde pruebas.php y mi nombre es ".$nombre;
});
Route::get('edad/{edad?}', function ($edad=20) {
    return "Hola desde edad y mi edad es ".$edad;
});
Route::get('controlador/{nombre}', 'Prueba\PruebaController@nombre');
Route::resource('movie', 'MovieController');*/