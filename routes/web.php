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
    return view('auth.login'); //return view->hace referencia a la carpeta.nombredelarchivo 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Status routes
Route::get('/status/index', 'StatusController@index')->name('status_index');
Route::get('/status/create', 'StatusController@create')->name('status_create');
Route::post('/status/create', 'StatusController@store')->name('status_store');
Route::get('/status/edit/{id}', 'StatusController@edit')->name('status_edit');
Route::put('/status/update/{id}', 'StatusController@update')->name('status_update');
Route::get('/status/show/{id}', 'StatusController@show')->name('status_show');
Route::get('tire/index', 'TireController@index')->name('tire_index');