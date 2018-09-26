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
Route::post('/newsletter', 'IndexController@newsletter')->name('index.newsletter');
Route::get('/affiliate', 'AffiliateController@index')->name('affiliate.index');
Route::post('/affiliate', 'AffiliateController@register')->name('affiliate.register');
Route::get('/affiliate/account', 'AffiliateController@account')->name('affiliate.account');
Route::get('/dashboard', 'IndexController@dashboard')->name('index.dashboard');
Route::get('/kurzy', 'IndexController@kurzy')->name('index.kurzy');

Route::view('/kurzy/dokumentace/ke/kurzu', 'dokumentace-ke-kurzu.index');
Route::view('/kurzy/dokumentace/ke/kurzu/html', 'dokumentace-ke-kurzu.pages.html')->name('dokumentace.html');
Route::view('/kurzy/dokumentace/ke/kurzu/css', 'dokumentace-ke-kurzu.pages.css')->name('dokumentace.css');
