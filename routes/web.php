<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Pagecontroller@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/','PagesController@home');
    Route::get('/', 'HomeController@index')->name('home');

Route::get('/schedule','courseController@index');

Route::get('/', function () {
    print("This is a test");
    return view('welcome');
})->name('home');

Route::get('/instructors', 'InstructorController@index')->name('instructors.index');
Route::get('/instructors/{id}/edit','InstructorController@edit')->name('instructors.edit');
Route::get('/instructors/{id}/delete','InstructorController@destroy')->name('instructors.destroy');
Route::get('/create','InstructorController@create')->name('instructors.create');
Route::post('/create','InstructorController@store')->name('instructors.store');
Route::post('/instructor/update','InstructorController@update')->name('instructors.update');
});


Auth::routes();
