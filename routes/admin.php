<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', ['as' => 'admin.login', 'uses'	=> 'AuthController@login']);
Route::post('admin', ['as' => 'admin.login.attempt', 'uses'	=> 'AuthController@login_attempt']);


Route::group(['prefix' => 'admin', 'middleware'	=> 'admin.auth'], function () {

	Route::get('dashboard', ['as' => 'admin.dashboard', 'uses'	=> 'DashboardController@index']);
	Route::get('logout', ['as' => 'admin.logout', 'uses'	=> 'AuthController@logout']);


	Route::get('vehicleTypes', ['as'=> 'admin.vehicleTypes.index', 'uses' => 'VehicleTypeController@index']);
	Route::post('vehicleTypes', ['as'=> 'admin.vehicleTypes.store', 'uses' => 'VehicleTypeController@store']);
	Route::get('vehicleTypes/create', ['as'=> 'admin.vehicleTypes.create', 'uses' => 'VehicleTypeController@create']);
	Route::put('vehicleTypes/{vehicleTypes}', ['as'=> 'admin.vehicleTypes.update', 'uses' => 'VehicleTypeController@update']);
	Route::patch('vehicleTypes/{vehicleTypes}', ['as'=> 'admin.vehicleTypes.update', 'uses' => 'VehicleTypeController@update']);
	Route::delete('vehicleTypes/{vehicleTypes}', ['as'=> 'admin.vehicleTypes.destroy', 'uses' => 'VehicleTypeController@destroy']);
	Route::get('vehicleTypes/{vehicleTypes}', ['as'=> 'admin.vehicleTypes.show', 'uses' => 'VehicleTypeController@show']);
	Route::get('vehicleTypes/{vehicleTypes}/edit', ['as'=> 'admin.vehicleTypes.edit', 'uses' => 'VehicleTypeController@edit']);

	Route::get('vendors', ['as'=> 'admin.vendors.index', 'uses' => 'VendorController@index']);
	Route::post('vendors', ['as'=> 'admin.vendors.store', 'uses' => 'VendorController@store']);
	Route::get('vendors/create', ['as'=> 'admin.vendors.create', 'uses' => 'VendorController@create']);
	Route::put('vendors/{vendors}', ['as'=> 'admin.vendors.update', 'uses' => 'VendorController@update']);
	Route::patch('vendors/{vendors}', ['as'=> 'admin.vendors.update', 'uses' => 'VendorController@update']);
	Route::delete('vendors/{vendors}', ['as'=> 'admin.vendors.destroy', 'uses' => 'VendorController@destroy']);
	Route::get('vendors/{vendors}', ['as'=> 'admin.vendors.show', 'uses' => 'VendorController@show']);
	Route::get('vendors/{vendors}/edit', ['as'=> 'admin.vendors.edit', 'uses' => 'VendorController@edit']);

	Route::get('vehicleSpecifications', ['as'=> 'admin.vehicleSpecifications.index', 'uses' => 'VehicleSpecificationController@index']);
	Route::post('vehicleSpecifications', ['as'=> 'admin.vehicleSpecifications.store', 'uses' => 'VehicleSpecificationController@store']);
	Route::get('vehicleSpecifications/create', ['as'=> 'admin.vehicleSpecifications.create', 'uses' => 'VehicleSpecificationController@create']);
	Route::put('vehicleSpecifications/{vehicleSpecifications}', ['as'=> 'admin.vehicleSpecifications.update', 'uses' => 'VehicleSpecificationController@update']);
	Route::patch('vehicleSpecifications/{vehicleSpecifications}', ['as'=> 'admin.vehicleSpecifications.update', 'uses' => 'VehicleSpecificationController@update']);
	Route::delete('vehicleSpecifications/{vehicleSpecifications}', ['as'=> 'admin.vehicleSpecifications.destroy', 'uses' => 'VehicleSpecificationController@destroy']);
	Route::get('vehicleSpecifications/{vehicleSpecifications}', ['as'=> 'admin.vehicleSpecifications.show', 'uses' => 'VehicleSpecificationController@show']);
	Route::get('vehicleSpecifications/{vehicleSpecifications}/edit', ['as'=> 'admin.vehicleSpecifications.edit', 'uses' => 'VehicleSpecificationController@edit']);


	Route::get('vehicles', ['as'=> 'admin.vehicles.index', 'uses' => 'VehiclesController@index']);
	Route::post('vehicles', ['as'=> 'admin.vehicles.store', 'uses' => 'VehiclesController@store']);
	Route::get('vehicles/create', ['as'=> 'admin.vehicles.create', 'uses' => 'VehiclesController@create']);
	Route::put('vehicles/{vehicles}', ['as'=> 'admin.vehicles.update', 'uses' => 'VehiclesController@update']);
	Route::patch('vehicles/{vehicles}', ['as'=> 'admin.vehicles.update', 'uses' => 'VehiclesController@update']);
	Route::delete('vehicles/{vehicles}', ['as'=> 'admin.vehicles.destroy', 'uses' => 'VehiclesController@destroy']);
	Route::get('vehicles/{vehicles}', ['as'=> 'admin.vehicles.show', 'uses' => 'VehiclesController@show']);
	Route::get('vehicles/{vehicles}/edit', ['as'=> 'admin.vehicles.edit', 'uses' => 'VehiclesController@edit']);
	Route::post('vehicles/imageRemove', ['as'=> 'admin.vehicles.image_remove', 'uses' => 'VehiclesController@imageRemove']);
	Route::post('vehicles/remove/specification', ['as'=> 'admin.vehicles.remove.specification', 'uses' => 'VehiclesController@specificationRemove']);


	Route::get('offers', ['as'=> 'admin.offers.index', 'uses' => 'OffersController@index']);
	Route::post('offers', ['as'=> 'admin.offers.store', 'uses' => 'OffersController@store']);
	Route::get('offers/create', ['as'=> 'admin.offers.create', 'uses' => 'OffersController@create']);
	Route::put('offers/{offers}', ['as'=> 'admin.offers.update', 'uses' => 'OffersController@update']);
	Route::patch('offers/{offers}', ['as'=> 'admin.offers.update', 'uses' => 'OffersController@update']);
	Route::delete('offers/{offers}', ['as'=> 'admin.offers.destroy', 'uses' => 'OffersController@destroy']);
	Route::get('offers/{offers}', ['as'=> 'admin.offers.show', 'uses' => 'OffersController@show']);
	Route::get('offers/{offers}/edit', ['as'=> 'admin.offers.edit', 'uses' => 'OffersController@edit']);

	Route::get('packages', ['as'=> 'admin.packages.index', 'uses' => 'PackagesController@index']);
	Route::post('packages', ['as'=> 'admin.packages.store', 'uses' => 'PackagesController@store']);
	Route::get('packages/create', ['as'=> 'admin.packages.create', 'uses' => 'PackagesController@create']);
	Route::put('packages/{packages}', ['as'=> 'admin.packages.update', 'uses' => 'PackagesController@update']);
	Route::patch('packages/{packages}', ['as'=> 'admin.packages.update', 'uses' => 'PackagesController@update']);
	Route::delete('packages/{packages}', ['as'=> 'admin.packages.destroy', 'uses' => 'PackagesController@destroy']);
	Route::get('packages/{packages}', ['as'=> 'admin.packages.show', 'uses' => 'PackagesController@show']);
	Route::get('packages/{packages}/edit', ['as'=> 'admin.packages.edit', 'uses' => 'PackagesController@edit']);
	

	Route::get('generalInformations', ['as'=> 'admin.generalInformations.index', 'uses' => 'GeneralInformationController@index']);
	Route::post('generalInformations', ['as'=> 'admin.generalInformations.store', 'uses' => 'GeneralInformationController@store']);

	Route::get('pages', ['as'=> 'admin.pages.index', 'uses' => 'PagesController@index']);
	Route::post('pages', ['as'=> 'admin.pages.store', 'uses' => 'PagesController@store']);
	Route::get('pages/create', ['as'=> 'admin.pages.create', 'uses' => 'PagesController@create']);
	Route::put('pages/{pages}', ['as'=> 'admin.pages.update', 'uses' => 'PagesController@update']);
	Route::patch('pages/{pages}', ['as'=> 'admin.pages.update', 'uses' => 'PagesController@update']);
	Route::delete('pages/{pages}', ['as'=> 'admin.pages.destroy', 'uses' => 'PagesController@destroy']);
	Route::get('pages/{pages}', ['as'=> 'admin.pages.show', 'uses' => 'PagesController@show']);
	Route::get('pages/{pages}/edit', ['as'=> 'admin.pages.edit', 'uses' => 'PagesController@edit']);



});