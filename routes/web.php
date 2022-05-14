<?php

use App\Http\Controllers\Estimate\PDFController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@index')->name('main');

Route::group(['namespace' => 'Cart', 'middleware' => 'auth'], function () {
    Route::get('/cart', 'IndexController')->name('cart.index');
    Route::patch('/edit-cart', 'UpdateController')->name('cart.update');
    Route::patch('/edit-chbox', 'UpdateChBoxController')->name('cart.update_chbox');
    Route::delete('/cart-delete', 'DeleteController')->name('cart.delete');
});
Route::group(['namespace' => 'Cart\Keramik', 'middleware' => 'auth'], function () {
    Route::post('/add-to-cart', 'StoreController')->name('cart.store');
});

Route::get('/blocks_keramik', 'KeramikController')->name('keramik');
Route::get('/jbi', 'ConcreteController')->name('jbi');

Route::group(['namespace' => 'Estimate', 'middleware' => 'auth'], function () {
    Route::get('/estimates', 'IndexController')->name('estimates.index');
    Route::post('/estimates', 'StoreController')->name('estimates.store');
    Route::delete('/delete-one-estimate', 'DeleteController')->name('estimate.delete');
    Route::delete('/estimates', 'DeleteSeveralController')->name('estimate.deleteSeveral');
    Route::get('/estimates/{estimate}/edit', 'EditController')->name('estimate.edit');
    Route::post('/double-estimate', 'DoubleController')->name('estimate.double');
});





Route::get('/calculations', 'CalculationController@index')->name('calculations.index');


Route::get('/calculations/ajax_slab-foundation', 'CalculationController@slabFoundation')->name('calculations.slabFoundation');
Route::get('/calculations/ajax_freezing-depth', 'CalculationController@freezingDepth')->name('calculations.freezing_depth');
Route::get('/calculations/ajax_bricks', 'CalculationController@bricks')->name('calculations.bricks');
Route::get('/calculations/ajax_wall-blocks', 'CalculationController@wallBlocks')->name('calculations.wall-blocks');
Route::get('/calculations/ajax_foam-blocks', 'CalculationController@foamBlocks')->name('calculations.foam-blocks');
Route::get('/calculations/ajax_keramik-blocks', 'CalculationController@keramikBlocks')->name('calculations.keramik-blocks');
Route::get('/calculations/ajax_concrete-blocks', 'CalculationController@concreteBlocks')->name('calculations.concrete-blocks');
Route::get('/calculations/ajax_hard-concrete', 'CalculationController@hardConcrete')->name('calculations.hard-concrete');
Route::get('/calculations/ajax_light-concrete', 'CalculationController@lightConcrete')->name('calculations.light-concrete');
Route::get('/calculations/ajax_building-mixture', 'CalculationController@buildingMixture')->name('calculations.building-mixture');

Route::get('/calculations/ajax_get-goods', 'CalculationController@getGoods')->name('calculations.get-goods');
Route::post('/add-to-cart-from-calc', 'CalculationController@addToCart')->name('calculations.add-to-cart');





Route::get('pdf/preview/{preview}', [PDFController::class, 'preview'])->name('pdf.preview');
Route::get('pdf/generate/{preview}', [PDFController::class, 'generatePDF'])->name('pdf.generate');





Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
