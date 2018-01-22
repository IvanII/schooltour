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

Route::get('/tours', 'ToursController@index')->name('tours_index');
Route::get('/bases', 'RecreationBasesController@index')->name('bases_index');
Route::get('/tours/{id}', 'ToursController@show')->name('tour_show');
Route::get('/bases/{id}', 'RecreationBasesController@show')->name('base_show');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    //Tours
    Route::get('/tours', 'ToursController@adminIndex')->name('tours_list');
    Route::post('/tours/add', 'ToursController@adminAdd');
    Route::get('/tours/add', 'ToursController@adminCreate')->name('tour_create');
    Route::get('/tours/edit/{id}', 'ToursController@adminEdit')->name('tour_edit');
    Route::put('/tours/update/{id}', 'ToursController@adminUpdate');
    Route::delete('/tours/delete/{id}', 'ToursController@adminDestroy')->name('tour_delete');

    //Bases
    Route::get('/bases', 'RecreationBasesController@adminIndex')->name('bases_list');
    Route::get('/bases/add', 'RecreationBasesController@adminCreate')->name('base_create');
    Route::post('/bases/add', 'RecreationBasesController@adminAdd');
    Route::get('/bases/edit/{id}', 'RecreationBasesController@adminEdit')->name('base_edit');
    Route::put('/bases/update/{id}', 'RecreationBasesController@adminUpdate');
    Route::delete('/bases/delete/{id}', 'RecreationBasesController@adminDestroy')->name('base_delete');
});
