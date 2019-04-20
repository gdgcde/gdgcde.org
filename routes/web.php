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

Route::get('/eventos/flisol', function () {
    return view('inicio');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/menu', 'MenuController');
Route::resource('/slider', 'SliderController');
Route::resource('/registrados', 'RegistradosController');

Route::post('registro', 'SiteController@registro')->name('registro');



//API
Route::get('/menus', 'MenuController@api_menus');
Route::get('/sliders', 'SliderController@api_slider');

// GDG AURA ROUTES
Route::get('/', function () { 
    return view('welcome');
});
Route::get('/acerca', function() {
    return view('about');}
);
Route::get('/eventos', function() {
    return view('events');
});
Route::get('/equipo', function() {
    return view('team');
});
Route::get('/contacto', function() {
    return view('contact');
});

