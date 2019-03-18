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

Route::get('/', ['as'	=> 'site.index', 'uses'	=> 'SiteController@index']);
Route::get('/services', ['as'	=> 'site.service', 'uses'	=> 'SiteController@service']);
Route::get('/contact', ['as'	=> 'site.contact', 'uses'	=> 'SiteController@contact']);
Route::post('/contact/request', ['as'	=> 'site.contact.request', 'uses'	=> 'SiteController@contact_request']);
Route::get('pages/{page_code}', ['as'	=> 'site.pages', 'uses'	=> 'SiteController@pages']);




