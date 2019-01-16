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

Route::get('/', 'HomePageController@index')->name('home.page');
Route::get('/contact' , 'HomePageController@contact')->name('contact');
Route::get('/contact/email' , 'HomePageController@getEmail')->name('getEmail');
Route::post('/contact/email' , 'HomePageController@postEmail')->name('postEmail');

Route::resource('albums', 'AlbumController');

Route::get('/photos/create/{album}', 'PhotoController@create')->name('photos.create');
Route::post('/photos/store', 'PhotoController@store')->name('photos.store');
Route::delete('/photos/{photo}', 'PhotoController@destroy')->name('photos.destroy');

Auth::routes();

