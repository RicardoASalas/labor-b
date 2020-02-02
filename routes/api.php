<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Auth;

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



// Users
Route::get('/test','TestController@test');
Route::post('/test','TestController@testpost');


// User
Route::post('/user/register','UserController@register');
Route::post('/user/login','UserController@login');
Route::get('/user/{uid}','UserController@getUser');
Route::post('/user/editProfile/{uid}','UserController@editUser');
Route::get('/user/find','UserController@findCompany');


// Offer
Route::post('/offer/register/{uid}','OfferController@registerOffer');
Route::get('/offer/find','OfferController@findOffer');
Route::post('/offer/aply/{offerId}/{uid}','OfferController@aplyOffer');
Route::post('/offer/aplyed/{uid}','OfferController@getAplyOffers');






// Ejemplo con params
// Route::get('/loginU/{email}/{password}','UsuarioController@getLoginU');



