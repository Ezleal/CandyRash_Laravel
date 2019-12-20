<?php


Route::get('/', "CandyRashController@index");

Route::get('/faq', "CandyRashController@faq");

Route::get('/producto', "CandyRashController@producto");

Route::get('/perfil', "CandyRashController@perfil");

Route::get('/register', "CandyRashController@register");

Route::get('/login', "CandyRashController@login");

Route::get('/candys', "CandyRashController@listado");

Route::get('/candys/new', "CandyRashController@new")->middleware(['auth', 'is_admin']);
Route::post('/candys/new', "CandyRashController@create")->middleware(['auth', 'is_admin']);

Route::get('/candys/{id}', "CandyRashController@detail")->middleware(['auth']);

Route::post('/candys/edit', "CandyRashController@edit");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');


route::post('/candys' , 'CarritoController@crear');

Route::get('/carrito', "CarritoController@listado")->middleware(['auth']);
