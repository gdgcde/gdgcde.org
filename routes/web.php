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
Route::get('/', 'HomePageController@index');
Route::get('/acerca', 'AboutPageController@index');
Route::get('/eventos', 'EventsPageController@index');
Route::get('/eventos/flisol', 'EventsPageController@flisol'); // Temp route
Route::get('/equipo', 'TeamPageController@index');
Route::get('/contacto', 'ContactPageController@index');

Route::get('/hola-mundo', 'HolaMundoController@index');
