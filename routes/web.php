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
Route::get('/family', 'FamilyRecreationsController@index')->name('family_index');
Route::get('/testimonials', 'TestimonialsController@index')->name('testimonials_index');
Route::get('/tours/{id}', 'ToursController@show')->name('tour_show');
Route::get('/bases/{id}', 'RecreationBasesController@show')->name('base_show');
Route::get('/family/{id}', 'FamilyRecreationsController@show')->name('family_show');
Route::get('/testimonials/{id}', 'TestimonialsController@show')->name('testimonial_show');
Route::get('/contacts', 'ContactsController@show')->name('contacts');

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'] ,function () {
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

    //FamilyRecreations
    Route::get('/family', 'FamilyRecreationsController@adminIndex')->name('family_list');
    Route::get('/family/add', 'FamilyRecreationsController@adminCreate')->name('family_create');
    Route::post('/family/add', 'FamilyRecreationsController@adminAdd');
    Route::get('/family/edit/{id}', 'FamilyRecreationsController@adminEdit')->name('family_edit');
    Route::put('/family/update/{id}', 'FamilyRecreationsController@adminUpdate');
    Route::delete('/family/delete/{id}', 'FamilyRecreationsController@adminDestroy')->name('family_delete');

    //Testimonials
    Route::get('/testimonials', 'TestimonialsController@adminIndex')->name('testimonials_list');
    Route::get('/testimonials/add', 'TestimonialsController@adminCreate')->name('testimonials_create');
    Route::post('/testimonials/add', 'TestimonialsController@adminAdd');
    Route::get('/testimonials/edit/{id}', 'TestimonialsController@adminEdit')->name('testimonials_edit');
    Route::put('/testimonials/update/{id}', 'TestimonialsController@adminUpdate');
    Route::delete('/testimonials/delete/{id}', 'TestimonialsController@adminDestroy')->name('testimonials_delete');

    //Contacts
    Route::get('/contacts/edit', 'ContactsController@adminEdit')->name('contacts_edit');
    Route::put('/contacts/update', 'ContactsController@adminUpdate')->name('contacts_update');
});

