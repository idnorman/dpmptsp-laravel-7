<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'WebController@index');
Route::get('/perizinan/{id}', 'PerizinanController@show');
Route::get('/perizinan', 'PerizinanController@indexWeb');

Route::get('/cari', 'WebController@search');

Route::get('panel', 'AuthController@isLogin')->name('login');
Route::get('panel/login', 'AuthController@showFormLogin')->name('login');
Route::post('panel/login', 'AuthController@login');
Route::get('panel/logout', 'AuthController@logout')->name('logout');
Route::get('panel/home', 'PanelController@home')->name('home');

Route::resource('panel/user', 'UserController')->middleware('admin');

Route::resource('panel/kategori', 'CategoryController')->middleware('admin');

Route::post('panel/artikel/create/uploadimage','ArticleController@uploadimage')->name('gambarartikel');

Route::resource('panel/artikel', 'ArticleController');

Route::resource('panel/menu', 'MenuController');
Route::resource('panel/widget', 'WidgetController');

Route::post('panel/perizinan/create/uploadimage','PerizinanController@uploadimage')->name('gambarperizinan');

Route::resource('panel/perizinan', 'PerizinanController');

Route::get('panel/about', 'AboutController@index');
Route::put('panel/about/{id}', 'AboutController@update');

Route::get('/{slug_kategori}', 'WebController@articleByCategory');
Route::get('/{slug_kategori}/{slug_artikel}', 'WebController@single');