<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//ROUTES

//route for home
Route::get('/', 'App\Http\Controllers\ProductController@show');

//route for products
Route::get('/products', 'App\Http\Controllers\ProductController@index');

//route for stocks
Route::get('/stocks/{product_id}', 'App\Http\Controllers\StockController@index');

//route for sorting products
Route::get('/products/{sort}', 'App\Http\Controllers\ProductController@sort');

//route for shops list
Route::get('/shops', 'App\Http\Controllers\ShopController@index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

