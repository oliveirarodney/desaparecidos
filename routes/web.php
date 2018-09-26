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

Auth::Routes();

Route::Get('/', [ 'uses'=>'ControllerHome@index' ]);

Route::Get('/inicio', 'ControllerHome@index')->name('home');

Route::Get('/cadastrar', [ 'uses'=>'ControllerRegister@showregister' ])->middleware('auth');

Route::Post('/cadastrar', [ 'uses'=>'ControllerRegister@store' ])->middleware('auth');

Route::Get('/pesquisar', [ 'uses'=>'ControllerSearch@search' ]);

Route::Post('/pesquisar', [ 'uses'=>'ControllerSearch@pesquisar', 'as'=>'pesquisar' ]);

Route::Get('/usuario', [ 'uses'=>'ControllerUser@user' ])->middleware('auth');

Route::Get('/page/{id}', [ 'uses'=>'ControllerPage@page', 'as'=>'page' ]);

Route::Delete('/page/{id}/{idcomment}', [ 'uses'=>'ControllerPage@apagarComentario', 'as' => 'delete' ])->middleware('auth');

Route::Post('/page/{id}', [ 'uses'=>'ControllerPage@fazerComentario', 'as'=>'fazerComentario' ]);

Route::Get('/editar/{id}', [ 'uses'=>'ControllerEdit@edit', 'as'=>'edit' ])->middleware('auth');

Route::Put('/editar/{id}', [ 'uses'=>'ControllerEdit@update', 'as'=>'update' ])->middleware('auth');

Route::Delete('/page/{id}', [ 'uses'=>'ControllerPage@excluirDesaparecido', 'as'=>'excluirDesaparecido' ])->middleware('auth');
