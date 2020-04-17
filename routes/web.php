<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Pagecontroller@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/','PagesController@home');
    Route::get('/', 'HomeController@index')->name('home');

Route::get('/schedule','courseController@index');

});


Auth::routes();
