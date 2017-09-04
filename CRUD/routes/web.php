<?php

//Redireciona tela cadastro
Route::get('/painel/pessoas/Cadastro','Painel\PessoaController@Cadastro');
//Redireciona tela lista de pessoas
Route::get('/painel/pessoas/lista','Painel\PessoaController@lista');
//faz cadastro no bd
Route::get('/painel/pessoas/destroy/{id}','Painel\PessoaController@destroy');
//Lista pessoas
Route::resource('/painel/pessoas','Painel\PessoaController');
Route::resource('/','Painel\PessoaController');

