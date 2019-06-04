<?php

Route::get('/livros/cadastrado', 'LivroController@store');
Route::get('/livros/aluguel/{id?}', 'LivroController@update');
Route::get('/cadastrar', 'LivroController@cadastrar');

Route::resource('/livros', 'LivroController');


Route::get('/', 'MainController@index');
