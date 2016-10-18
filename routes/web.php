<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/Torneos', function(){
	return view('Torneos');
});
Route::get('/Eventos', function(){
	return view('Eventos');
});
Route::get('/Sorteos', function(){
	return view('Sorteos');
});
Route::get('/Resusmenes', function(){
	return view('Resusmenes');
});
Route::get('/Sugerencias', function(){
	return view('Sugerencias');
});