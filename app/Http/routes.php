<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/site', ['uses' => 'olaMundo@getOlaMundo']);
Route::auth();

Route::get('/home', 'HomeController@index');
