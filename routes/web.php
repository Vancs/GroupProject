<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'Pagecontroller@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/','PagesController@home');
Route::get('/', function(){
      return view('index');
    });


Route::get('/schedule','courseController@index');
Route::get('/schedule/create','courseController@create')->name('schedules.create');
Route::get('/schedule/edit/{post}','courseController@edit')->name('schedules.edit');
Route::get('/schedule/{id}/delete','courseController@destroy')->name('schedules.destroy');
Route::post('/schedule/store','courseController@store')->name('schedules.store');
Route::post('/schedule/update','courseController@update')->name('schedules.update');
Route::get('/schedule/{id}/show','courseController@show')->name('schedules.show');

Route::get('/instructors', 'InstructorController@index')->name('instructors.index');
Route::get('/instructors/{id}/edit','InstructorController@edit')->name('instructors.edit');
Route::get('/instructors/{id}/delete','InstructorController@destroy')->name('instructors.destroy');
Route::get('/instructors/create','InstructorController@create')->name('instructors.create');
Route::post('/instructors/create','InstructorController@store')->name('instructors.store');
Route::post('/instructor/update','InstructorController@update')->name('instructors.update');


Route::get('/locations', 'LocationController@index')->name('locations.index');
Route::get('/locations/{id}/edit','LocationController@edit')->name('locations.edit');
Route::get('/locations/{id}/delete','LocationController@destroy')->name('locations.destroy');
Route::get('/locations/create','LocationController@create')->name('locations.create');
Route::post('/locations/create','LocationController@store')->name('locations.store');
Route::post('/locations/update','LocationController@update')->name('locations.update');


Route::get('/reports/create','ReportsController@create')->name('reports.create');
Route::get('/reports/show','ReportsController@show')->name('reports.show');
Route::post('/reports/store','ReportsController@store');
Route::get('/reports','ReportsController@displayStock');
});
Auth::routes();
