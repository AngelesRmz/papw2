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

Route::get('/land', function () {
    return view('nav_bar2');
});

Route::get('/iniciarsesion', function () {
    return view('login');
})->name('ingresar');

Route::get('/registrar', function () {
    return view('registro');
})->name('registrar');

Route::get('/Inicio', function () {
    return view('inicio');
});

Route::get('/canal', function () {
    return view('canalUsuario');
})->name('mychannel');

Route::get('/upload', function () {
    return view('subirVideo');
});

//Registro
// Route::post('/usuario','UsuarioController@store')->name('usuario.store');

//Controlador para mostrar el login
Route::get('login','Auth\LoginController@showLoginForm')->name('login');

//Controlador para hacer login
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::post('login','Auth/LoginController@login');

// Auth::routes();
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::get('/home', 'HomeController@index')->name('home');


//CARGA DE VIDEOS
Route::resource('/upload','upload');
Route::post('upload', 'upload@store')->name('upVid');
