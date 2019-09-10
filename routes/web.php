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
Route::get('/contact', 'HomePageController@contact')->name('contact');
Route::get('/contact/email', 'HomePageController@getEmail')->name('getEmail');
Route::post('/contact/email', 'HomePageController@postEmail')->name('postEmail');
Route::get('/projects/{album}', 'HomePageController@projects')->name('projects');
Route::get('/about', 'HomePageController@about')->name('about');
Route::get('/blog', 'HomePageController@blog')->name('blog');
Route::get('/services', 'HomePageController@services')->name('services');
Route::get('/blog/{blog}', 'HomePageController@blogShow')->name('blogShow');
Route::resource('contacts', 'ContactController');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('admin/albums', 'AlbumController');
    Route::resource('admin/photos', 'PhotoController');
    Route::resource('admin/comment', 'CommentController');
    Route::resource('admin/question', 'QuestionController');
    Route::resource('admin/blog', 'BlogController');
    Route::resource('admin/employee', 'EmployeeController');
    Route::resource('admin/service', 'ServiceController');



    Route::get('/admin', 'AdminController@index')->name('admin.homePage');
});

