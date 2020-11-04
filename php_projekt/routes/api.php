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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Routes for VueJS Admin Page
 * ATTENTION
 * Using ProductController (see singular form), instead of ProductsController (plural form)
 */
Route::get('/users/list/', 'UserController@list');
Route::get('/products/list/{page}', 'ProductController@list');
//makes soft delete, products cant be deleted because of order referencing
Route::delete('/products/{product}', 'ProductController@destroy');
Route::delete('/image/{id}','ProductController@destroyImage');

Route::post('/products/', 'ProductController@store');
Route::post('/upload/','ProductController@upload');

Route::get('/products/{product}/edit', 'ProductController@edit');

Route::put('/products/{product}', 'ProductController@update');

Route::get('/products/makers/','ProductController@makers');
Route::get('/products/sizes/','ProductController@sizes');
Route::get('/products/maincats/','ProductController@maincats');

Route::get('/products/subcats/{maincat}','ProductController@subcats');

Route::get('/image/{id}','ProductController@serveImage');

Route::get('/index', 'indexController@index');
