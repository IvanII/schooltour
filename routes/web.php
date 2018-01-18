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
Route::get('/tours/{id}', 'ToursController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    //Tours
    Route::get('/tours', 'ToursController@adminIndex')->name('tours_list');
    Route::post('/tours/add', 'ToursController@adminAdd');
    Route::get('/tours/create', 'ToursController@adminCreate');

    //Bases
    Route::get('/bases', 'RecreationBasesController@adminIndex')->name('bases_list');
    Route::get('/bases/add', 'RecreationBasesController@adminCreate');
    Route::post('/bases/add', 'RecreationBasesController@adminAdd');
});
