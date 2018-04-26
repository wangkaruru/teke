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
Route::get('nearestplace','GetrideController@nearestplace')->name('nearestplace');
Route::get('tekeride','GetrideController@tekeride')->name('tekeride');
Route::get('findme','GetrideController@findme')->name('findme');
Route::get('terms','GetrideController@terms')->name('terms');
Route::get('privacypolicy','GetrideController@privacypolicy')->name('privacypolicy');
Route::get('ridewithteke','GetrideController@ridewithteke')->name('ridewithteke');