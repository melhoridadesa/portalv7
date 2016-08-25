<?php

Route::get('/', ['uses' => 'olaMundo@getOlaMundo']);

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index');
    
    //Rotas do modulo conteudo
    Route::group(['prefix' => 'conteudo'], function () {
        Route::get('/', 'adminConteudoController@index');
        Route::get('/cadastrar-conteudo', 'adminConteudoController@cadastrar');
        Route::get('/editar-conteudo/id/{id}', 'adminConteudoController@editar');
        Route::get('/excluir/id/{id}', 'adminConteudoController@excluir');
        Route::post('/inserir-conteudo', 'adminConteudoController@inserir');
        Route::post('/editar-conteudo', 'adminConteudoController@editarConteudo');
    });
    
    //Rotas do modulo logo
    Route::group(['prefix' => 'logo'], function () {
        Route::get('/', 'adminLogoController@index');
        Route::get('/cadastrar-logo', 'adminLogoController@cadastrar');
        Route::get('/editar-logo/id/{id}', 'adminLogoController@editar');
    });
    
    //Rotas do modulo logo
    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', 'adminMenuController@index');
        Route::get('/cadastrar-menu', 'adminMenuController@cadastrar');
        Route::get('/editar-menu/id/{id}', 'adminMenuController@editar');
    });
});

Route::auth();