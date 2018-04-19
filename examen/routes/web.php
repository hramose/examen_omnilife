<?php

Route::get('/', ['as'=> 'home', 'uses' => 'NavegacionController@home']);
Route::get('/home', 'NavegacionController@home');


Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('empresarios/create', ['as' => 'empresarios.create', 'uses' => 'EmpresariosController@create']);
Route::post('/home', ['as' => 'empresarios.store', 'uses' => 'EmpresariosController@store']);

Route::delete('empresarios/{id}', ['as' => 'empresarios.destroy', 'uses' => 'EmpresariosController@Destroy']);
Route::get('empresarios/{id}/edit', ['as' => 'empresarios.edit', 'uses'=> 'EmpresariosController@edit']);
Route::put('empresarios/{id}', ['as' => 'empresarios.update', 'uses' => 'EmpresariosController@update']);
