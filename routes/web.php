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

Route::get('/', 'ToursController@index');
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/tours/{id}', 'ToursController@show')->name('tour_show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    //Tours
    Route::get('/tours', 'ToursController@adminIndex')->name('tours_list');
    Route::post('/tours/add', 'ToursController@adminAdd');
    Route::get('/tours/add', 'ToursController@adminCreate')->name('tour_create');
    Route::get('/tours/edit/{id}', 'ToursController@adminEdit')->name('tour_edit');
    Route::put('/tours/update/{id}', 'ToursController@adminUpdate');

    //Bases
    Route::get('/bases', 'RecreationBasesController@adminIndex')->name('bases_list');
    Route::get('/bases/add', 'RecreationBasesController@adminCreate')->name('base_create');
    Route::post('/bases/add', 'RecreationBasesController@adminAdd');
});
