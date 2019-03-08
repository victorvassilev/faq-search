<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', ['as' => 'default-route', 'uses' => 'Search\SearchController@output']);

Route::any('suche', ['as' => 'suche', 'uses' => 'Search\SearchController@output']);

Auth::routes();

Route::get('admin/faq', ['as' => 'admin/faq', 'uses' => 'AdminController@index'] );
Route::get('admin/add', ['as' => 'admin/add', 'uses' => 'AdminController@create'] );
Route::get('admin/edit/{id}', ['as' => 'admin/edit', 'uses' => 'AdminController@edit']);
Route::post('admin/update/{id?}', ['as' => 'admin/update', 'uses' => 'AdminController@update']);
Route::get('admin/delete/{id}', ['as' => 'admin/delete', 'uses' => 'AdminController@delete']);

Route::get('logout', ['as' => 'logout', 'uses' => 'AdminController@logout']);
