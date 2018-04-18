<?php

Route::get('/', ['as'=> 'home', 'uses' => 'NavegacionController@home']);
Route::get('/home', 'NavegacionController@home');


Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('empresarios', ['as' => 'empresarios.create', 'uses' => 'EmpresariosController@create']);
Route::delete('empresarios/{id}', ['as' => 'empresarios.destroy', 'uses' => 'EmpresariosController@Destroy']);
