<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('asignacnioasd','UserController@assigndatabase')->name('assigndatabase');

Auth::routes();

Route::get('/home', 'Backend\BackendController@index')->name('home');

Route::group(["prefix"=>'clients'],function(){
    Route::get('/register', 'Client\ClientController@register')->name('clients.create');
    Route::post('/store', 'Client\ClientController@store')->name('clients.store');
});

Route::group(["prefix"=>'countries'],function(){
    Route::get('/list/codephone/{id_country}','Shared\CountryController@listCodePhone')->name('countries.listCodePhone');
    Route::get('/list/makingcode/{id_country}','Shared\CountryController@listMakingCodes')->name('countries.listMakingCodes');
    Route::get('/listcity/{id_country}', 'Shared\CityController@list')->name('cities.list');

});

Route::group(["prefix"=>'trakings'],function(){
    Route::get('/', 'Traking\TrakingController@index')->name('trakings.index');

});

Route::group(["prefix"=>'packages'],function(){
    Route::get('/', 'Package\PackageController@index')->name('packages.index');

});

Route::group(["prefix"=>'agencies'],function(){
    Route::get('/', 'Agency\AgencyController@index')->name('agencies.index');
    Route::get('create', 'Agency\AgencyController@create')->name('agencies.create');
    Route::post('store', 'Agency\AgencyController@store')->name('agencies.store');
    Route::get('edit/{id}', 'Agency\AgencyController@edit')->name('agencies.edit');
    Route::delete('delete', 'Agency\AgencyController@delete')->name('agencies.delete');
});

Route::group(["prefix"=>'airlines'],function(){
    Route::get('/', 'Airline\AirlineController@index')->name('airlines.index');
    Route::get('create', 'Airline\AirlineController@create')->name('airlines.create');
    Route::post('store', 'Airline\AirlineController@store')->name('airlines.store');
    Route::get('edit/{id}', 'Airline\AirlineController@edit')->name('airlines.edit');
    Route::put('update', 'Airline\AirlineController@update')->name('airlines.update');
    Route::delete('delete', 'Airline\AirlineController@delete')->name('airlines.delete');
});


Route::group(["prefix"=>'whatsapps'],function(){
    Route::get('/', 'whatsapp\whatsappController@index')->name('whatsapps.index');

});

Route::group(["prefix"=>'countries'],function(){
    Route::get('/', 'Country\CountryController@index')->name('countries.index');
    Route::get('create', 'Country\CountryController@create')->name('countries.create');
    Route::post('store', 'Country\CountryController@store')->name('countries.store');
    Route::get('edit/{id}', 'Country\CountryController@edit')->name('countries.edit');
    Route::put('update', 'Country\CountryController@update')->name('countries.update');
    Route::delete('delete', 'Country\CountryController@delete')->name('countries.delete');
});

Route::group(["prefix"=>'cities'],function(){
    Route::get('/', 'Country\CityController@index')->name('cities.index');
    Route::get('create', 'Country\CityController@create')->name('cities.create');
    Route::post('store', 'Country\CityController@store')->name('cities.store');
    Route::get('edit/{id}', 'Country\CityController@edit')->name('cities.edit');
    Route::put('update', 'Country\CityController@update')->name('cities.update');
    Route::delete('delete', 'Country\CityController@delete')->name('cities.delete');
});

Route::group(["prefix"=>'wharehouses'],function(){
    Route::get('/', 'Wharehouse\WharehouseController@index')->name('wharehouses.index');
    Route::get('create', 'Wharehouse\WharehouseController@create')->name('wharehouses.create');
    Route::post('store', 'Wharehouse\WharehouseController@store')->name('wharehouses.store');
    Route::get('edit/{id}', 'Wharehouse\WharehouseController@edit')->name('wharehouses.edit');
    Route::put('update', 'Wharehouse\WharehouseController@update')->name('wharehouses.update');
    Route::delete('delete', 'Wharehouse\WharehouseController@delete')->name('wharehouses.delete');
});

Route::group(["prefix"=>'national_rates'],function(){
    Route::get('/', 'Rate\NationalRateController@index')->name('national_rates.index');
    Route::get('create', 'Rate\NationalRateController@create')->name('national_rates.create');
    Route::post('store', 'Rate\NationalRateController@store')->name('national_rates.store');
    Route::get('edit/{id}', 'Rate\NationalRateController@edit')->name('national_rates.edit');
    Route::put('update', 'Rate\NationalRateController@update')->name('national_rates.update');
    Route::delete('delete', 'Rate\NationalRateController@delete')->name('national_rates.delete');
});