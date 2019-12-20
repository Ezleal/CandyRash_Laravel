<?php


Route::get('/', "CandyRashController@index");

Route::get('/faq', "CandyRashController@faq");

Route::get('/producto', "CandyRashController@producto");

Route::get('/perfil', "CandyRashController@perfil");

Route::get('/register', "CandyRashController@register");

Route::get('/login', "CandyRashController@login");

Route::get('/candys', "CandyRashController@listado");

Route::get('/candys/new', "CandyRashController@new")->middleware(['auth', 'is_admin']);;
Route::post('/candys/new', "CandyRashController@create")->middleware(['auth', 'is_admin']);;

Route::get('/candys/{id}', "CandyRashController@detail")->middleware(['auth']);;
//
Route::get('/candys/edit/{id}', "CandyRashController@edit");
Route::post('/candys/edit/{id}', "CandyRashController@edit2");
Route::get('/candys/eliminate/{id}', "CandyRashController@eliminate");
Route::post('/candys/eliminate/{id}', "CandyRashController@delete");
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');


route::post('/candys' , 'CarritoController@crear');

Route::get('/carrito', "CarritoController@listado")->middleware(['auth']);;
Route::get('/carrito/{id}', "CarritoController@eliminar")->middleware(['auth']);;
Route::get('/compras/{id}', "CarritoController@comprar")->middleware(['auth']);;
// Route::post('/carrito', "CarritoController@eliminar");
