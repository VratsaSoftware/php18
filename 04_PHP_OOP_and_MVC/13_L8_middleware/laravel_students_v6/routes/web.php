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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
	Route::resource('courses', 'CoursesController')->only([
    	'index', 'show'
			]);
	Route::group(['middleware' => 'role'], function(){
		Route::resource('courses', 'CoursesController')->except([
    	'index', 'show'
			]);
	});
});
