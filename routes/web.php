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
	return view('tema1');
})->name('survei.index');

Route::group(['prefix' => '/'], function()
{
	Route::post('submit','SurveiController@store')->name('survei.store');
	Route::get('thankyou','SurveiController@thankyou')->name('survei.thankyou');
});

