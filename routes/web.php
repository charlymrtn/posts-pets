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

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::middleware('auth')->group(function (){

    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blog');
});

Route::get('/contacto', function () {
    return view('pages.contact');
})->name('contacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'panel'], function () {
    Voyager::routes();
});
