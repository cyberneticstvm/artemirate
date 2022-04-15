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

Route::get('/', 'App\Http\Controllers\CollectionController@homeload');

Route::get('/collection/', function () {
    return view('collection');
});


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