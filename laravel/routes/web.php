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
$portfolio = [
	['title' => 'Proyecto #1'],
	['title' => 'Proyecto #2'],
	['title' => 'Proyecto #3'],
	['title' => 'Proyecto #4'],
];

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
Route::get('/consulta', 'ConsultaController@get')->name('formulario');
Route::post('/consulta', 'ConsultaController@post')->name('post_formulario');
Route::get('/consulta/{cuit}', function ($cuit){
	return view('consulta', ['cuit' => $cuit]);
	})->name('consulta_directa');

Auth::routes();
