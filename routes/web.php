<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/religiao', 'ReligiaoController@listaReligiao');

Route::get('/personagens', 'PersonagemController@listaPersonagens');
Route::get('/personagem/{id}', 'PersonagemController@listaPersonagem');
