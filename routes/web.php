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


Route::post('/terminy', 'WorkshopController@register')->name('workshop.register');
Route::post('/newsletter', 'WorkshopController@newsletter')->name('workshop.newsletter');
