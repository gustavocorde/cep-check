<?php

use Illuminate\Support\Facades\Route;

Route::get('/', action: 'App\Http\Controllers\AddressController@index')->name(name: 'home');

Route::get('/add', action: 'App\Http\Controllers\AddressController@add')->name(name: 'add');

Route::post('/save', action: 'App\Http\Controllers\AddressController@save')->name(name: 'save');

Route::get('/search', action: 'App\Http\Controllers\AddressController@search')->name(name: 'search');

Route::get('/sortingBairro', action: 'App\Http\Controllers\AddressController@sortingBairro')->name(name: 'sortingBairro');

Route::get('/sortingCidade', action: 'App\Http\Controllers\AddressController@sortingCidade')->name(name: 'sortingCidade');

Route::get('/sortingEstado', action: 'App\Http\Controllers\AddressController@sortingEstado')->name(name: 'sortingEstado');

Route::get('/sortingBairroDesc', action: 'App\Http\Controllers\AddressController@sortingBairroDesc')->name(name: 'sortingBairroDesc');

Route::get('/sortingCidadeDesc', action: 'App\Http\Controllers\AddressController@sortingCidadeDesc')->name(name: 'sortingCidadeDesc');

Route::get('/sortingEstadoDesc', action: 'App\Http\Controllers\AddressController@sortingEstadoDesc')->name(name: 'sortingEstadoDesc');


