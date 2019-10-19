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
Route::get('post/{id}',[
    'uses' => 'PostController@show'
]);

Route::post('post/store',[
    'middleware' => 'auth',
    'uses'=>'PostController@store'
]);

/*ENVIAR LLAMADA AL CONTROLADOR PARA QUE VISUALICE LOS DATOS DE LA FUNCION INDEX*/
Route::get('/','PostController@index');

Route::post('post/update/{id}',  [ 
    'middleware'    => 'auth',
    'before'        => 'csrf',
    'uses'          => 'PostController@update'
         
]);
Route::post('post/store', [  
    'middleware'    => 'auth',  
    'before'        => 'csrf',  
    'uses'          => 'PostController@store'
    ]);