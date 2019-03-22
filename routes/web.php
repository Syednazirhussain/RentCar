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
Route::get('/packages', ['as'	=> 'site.packages', 'uses'	=> 'SiteController@packages']);
Route::get('/booking/{package_id}', ['as'	=> 'site.booking', 'uses'	=> 'SiteController@booking']);

Route::get('/login', ['as'	=> 'customer.login', 'uses'	=> 'CustomerLoginController@login']);
Route::get('/register', ['as'	=> 'customer.register', 'uses'	=> 'CustomerLoginController@register']);
Route::post('/register', ['as'	=> 'customer.register.attempt', 'uses'	=> 'CustomerLoginController@register_attempt']);






