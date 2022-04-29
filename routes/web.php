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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('goods')->group(function() {
    Route::get('', 'App\Http\Controllers\GoodsController@index')->name('goods.index');
    Route::post('storeAjax', 'App\Http\Controllers\GoodsController@storeAjax')->name('goods.storeAjax');
    Route::post('deleteAjax/{goods}', 'App\Http\Controllers\GoodsController@destroyAjax')->name('goods.destroyAjax');
    Route::get('showAjax/{goods}', 'App\Http\Controllers\GoodsController@showAjax')->name('goods.showAjax');
    Route::post('updateAjax/{goods}', 'App\Http\Controllers\GoodsController@updateAjax')->name('goods.updateAjax');
});

Route::prefix('categories')->group(function() {
    Route::get('', 'App\Http\Controllers\CategoriesController@index')->name('categories.index');
    Route::get('create', 'App\Http\Controllers\CategoriesController@create')->name('categories.create');
    Route::post('store', 'App\Http\Controllers\CategoriesController@store')->name('categories.store');
});