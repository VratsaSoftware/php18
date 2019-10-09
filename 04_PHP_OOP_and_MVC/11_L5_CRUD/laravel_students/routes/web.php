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
    return view('welcome');
});

Route::get('/home', 'HomePageController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/homework', 'HomeworkController@index')->name('homework');
Route::get('/module', 'ModulesController@index')->name('module');
Route::get('/lecture', 'LecturesController@index')->name('lecture');
Route::get('/course', 'CoursesController@index')->name('course');

