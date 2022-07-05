<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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

Route::get('/', 'App\Http\Controllers\WebController@collections');

Route::get('/collection/', function () {
    return view('collection');
});
Route::get('/collection/{slug}', 'App\Http\Controllers\WebController@products');
Route::get('/product/{slug}', 'App\Http\Controllers\WebController@product_detail');


// admin //
Route::get('/admin/', function () {
    return view('admin.login');
})->name('admin.login');
// end admin //

// collection //
Route::get('/admin/collection/', 'App\Http\Controllers\CollectionController@index')->name('collection.index');
Route::get('/admin/collection/create/', 'App\Http\Controllers\CollectionController@create')->name('collection.create');
Route::post('/admin/collection/create/', 'App\Http\Controllers\CollectionController@store')->name('collection.save');
Route::get('/admin/collection/edit/{id}/', 'App\Http\Controllers\CollectionController@edit')->name('collection.edit');
Route::put('/admin/collection/edit/{id}/', 'App\Http\Controllers\CollectionController@update')->name('collection.update');
Route::delete('/admin/collection/delete/{id}/', 'App\Http\Controllers\CollectionController@destroy')->name('collection.delete');
// end collection //

// product //
Route::get('/admin/product/', 'App\Http\Controllers\CollectionController@index')->name('product.index');
Route::get('/admin/product/create/', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/admin/product/create/', 'App\Http\Controllers\ProductController@store')->name('product.save');
// end product //

// send enquiry //
Route::post('/send-enquiry/', 'App\Http\Controllers\ProductController@enquiry')->name('product.enquiry');
Route::get('/enquiry/', 'App\Http\Controllers\ProductController@enquiryform')->name('enquiry');
// end send enquiry //

// mail //
Route::post('/send-enquiry-email/', [EmailController::class, 'index'])->name('send-enquiry-email');
// end mail //