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

Route::get('/', ['as' => 'default-route', function (Request $request) {
    
        $return = redirect()->route('index/search');

        return $return;
    }]
);
    
Route::get('index/search', ['as' => 'index/search', 'uses' => 'Search\SearchController@index']);
Route::post('index/output', ['as' => 'index/output', 'uses' => 'Search\SearchController@output']);
