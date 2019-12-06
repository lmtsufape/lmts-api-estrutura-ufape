<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*

Headers necessarios

'Content-Type' => 'application/json',
'X-Requested-With' => 'XMLHttpRequest'

*/



Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    // Route::post('signup', 'AuthController@signup');   Cadastro. Não utilizar
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout', 'AuthController@logout');
        //Route::get('user', 'AuthController@user');    Retorna todos dados do usuario. não utilizar
    });
});

Route::get('/usuario/getDados/{email}',                     'UserController@getDados'                     )->middleware('auth:api');
Route::get('/usuario/preg/getEmails',                       'UserController@getEmailsPreg'                );

Route::get('/check',                                        'AuthController@check'                        )->middleware('auth:api');

Route::get('/getEmails/{idUnidade}',                        'UserController@getEmailsPorUnidade' );
Route::get('/{modulo}/getUnidades/{raiz}/{tipoUnidade}',    'ModuloController@getUnidadesRaizTipoUnidade' );
Route::get('/{modulo}/getAcl/{tipoUsuario}',                'ControleDeAcessoController@getAcl');
