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

Route::get('/', 'SiteController@index')->name('index');

Route::middleware('auth')->group(function (){

    Route::get('/blog', 'SiteController@blog')->name('blog');
    Route::get('/post/{id}', 'SiteController@post')->name('post.show')->where('id', '[0-9]+');
});

Route::get('/contacto', 'SiteController@contact')->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'panel'], function () {
    Voyager::routes();
});
