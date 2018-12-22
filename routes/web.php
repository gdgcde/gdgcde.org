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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/menu', 'MenuController');
Route::resource('/slider', 'SliderController');





//API
Route::get('/menus', 'MenuController@api_menus');
Route::get('/sliders', 'SliderController@api_slider');


