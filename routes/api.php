<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\api\ProductContorller;
>>>>>>> ed597b7 (first commit)
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
<<<<<<< HEAD

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
=======
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('V1')->group(function (){
    Route::apiResource('product',ProductContorller::class);
});
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'App\Http\Controllers\api\RegisterController@register');
Route::post('login', 'App\Http\Controllers\api\RegisterController@login');

Route::group([
    'middleware'=>'api',
    'prefix'=>'auth'
], function () {
        Route::resource('products', 'App\Http\Controllers\api\ProductContorller');
        Route::post('product1', 'App\Http\Controllers\api\ProductContorller@store');
        Route::apiResource('carts', 'App\Http\Controllers\api\CartController');
        Route::post('cart', 'App\Http\Controllers\api\CartController@add');
});

Route::resource('product', 'App\Http\Controllers\api\ProductContorller');
//Route::apiResource('carts', 'App\Http\Controllers\api\CartController');
>>>>>>> ed597b7 (first commit)
