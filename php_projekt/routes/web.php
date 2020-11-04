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


// Route::get('/', 'IndexController@index');

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//HACK NA DYNAMICKE ROUTES PRE PRODUKTY

Route::get('/index','IndexController@index')->name('index');

Route::get('/products','ProductsController@index');
Route::get('/products/{id}','ProductsController@show')
    ->where('id','[0-9]+');

Route::get('/add-to-cart/{id}','ProductsController@addToCart')
    ->where('id','[0-9]+');

Route::get('/products/{maincat}', 'ProductsController@category')
    ->where('maincat','[a-z]*$');

Route::get('/products/{maincat}/{subcat}', 'ProductsController@categories')
    ->where('maincat','[a-z]*$')
    ->where('subcat','[a-z]*$');

Route::get('/kosik','BasketController@preview');
Route::get('/doprava','BasketController@transport');
Route::get('/platba','BasketController@payment');
Route::get('/uspech','BasketController@success');

Route::get('/kosik-zmena','BasketController@previewZmena');
Route::get('/doprava-zmena','BasketController@dopravaZmena');
Route::get('/platba-zmena','BasketController@paymentZmena');
Route::post('/doprava-adresa','BasketController@dopravaAdresa');
Route::get('/platba-adresa','BasketController@dopravaAdresa');





Route::get('/podmienky', function() {
    return view('empty');
});
Route::get('/onas', function() {
    return view('empty');
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::post('/login','LoginController@login');
//
//Route::match(['get','head'],'/login','LoginController@showLoginForm');
//
//Route::post('/logout','LoginController@logout')->name('logout');
//
//Route::match(['get','head'],'password/confirm','ConfirmPasswordController@showConfirmForm')->named('password.confirm');


//|        | GET|HEAD | password/confirm              | password.confirm      | App\Http\Controllers\Auth\ConfirmPasswordController@showConfirmForm    | web,auth                                             |
//|        | POST     | password/confirm              |                       | App\Http\Controllers\Auth\ConfirmPasswordController@confirm            | web,auth                                             |
//|        | POST     | password/email                | password.email        | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web                                                  |
//|        | GET|HEAD | password/reset                | password.request      | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web                                                  |
//|        | POST     | password/reset                | password.update       | App\Http\Controllers\Auth\ResetPasswordController@reset                | web                                                  |
//|        | GET|HEAD | password/reset/{token}        | password.reset        | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web                                                  |
//|        | GET|HEAD | register                      | register              | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,guest                                            |
//|        | POST     | register                      |                       | App\Http\Controllers\Auth\RegisterController@register                  | web,guest

Auth::routes();

Route::get('/', 'IndexController@index')->name('home');


