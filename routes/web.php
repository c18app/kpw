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


Route::view('/', 'homepage')->name('homepage');
Route::get('/terminy/{workshop_term?}', 'WorkshopController@terms')->name('workshop.terms');
Route::post('/terminy', 'WorkshopController@register')->name('workshop.register');
