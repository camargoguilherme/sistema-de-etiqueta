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

//Rotas para Pagina Home
Route::get('/', ['as'=>'site.home', 'uses'=>'Etiqueta\HomeController@index']);


//Rotas para Pagina de Login
Route::get('/login', ['as'=>'login.index', 'uses'=>'Etiqueta\LoginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'Etiqueta\LoginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'Etiqueta\LoginController@entrar']);



Route::get('/impressora', ['as'=>'impressora', 'uses'=>'Etiqueta\HomeController@impressora']);