<?php

use Illuminate\Http\Request;
Use App\Http\Controllers\DocumentsController;
Use App\Http\Controllers\FilesController;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::get('documents', 'DocumentsController@index');
//Route::get('documents/{id}', 'ArticleController@show');
Route::post('documents/create', 'DocumentsController@store');
Route::put('documents/{id}', 'DocumentsController@update');
Route::delete('documents/{id}', 'DocumentsController@delete');

Route::post('files/add', 'FilesController@add');
