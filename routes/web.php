<?php


Route::get('/', "CandyRashController@index");

Route::get('/faq', "CandyRashController@faq");

Route::get('/producto', "CandyRashController@producto");

Route::get('/pefil', "CandyRashController@perfil");

Route::get('/register', "CandyRashController@register");

Route::get('/login', "CandyRashController@login");

Route::get('/candys', "CandyRashController@listado");

Route::get('/candys/new', "CandyRashController@new");
Route::post('/candys/new', "CandyRashController@create");

Route::get('/candys/{id}', "CandyRashController@detail");
