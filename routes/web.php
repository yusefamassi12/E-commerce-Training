<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\models\products;
use Barryvdh\Debugbar\Facade as DebugBar;
use \App\Models\image;

>>>>>>> ed597b7 (first commit)

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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======
Route::get('image/{id}',function($id){
    $product=products::findorfail($id);
    $product->load('images');
    Debugbar::info($product->load('images')

    );
    return view('welcome');

});

>>>>>>> ed597b7 (first commit)
