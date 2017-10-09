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

Route::get('/login','LoginApiController@accessToken');
Route::get('/','ServerController@index');
Route::get('/server','ServerController@index');
Route::get('/server/{id}','ServerController@show');



Route::group(['middleware' => ['web','auth:api']], function()
{
    Route::get('/buildings/'      ,'BuildingsController@index');
    Route::get('/buildings/{id}','BuildingsController@show');
    Route::get('/planets/'    ,'PlanetsController@index');
    Route::get('/planets/{todo}','PlanetsController@show');
    Route::get('/planets/{todo}','PlanetsController@show');
    Route::get('/user','UserController@index');

});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
