<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre.';
});

Route::get('/contato', function () {
    return 'Esta é a página de Contato.';
});

Route::get('/produto/{id}', function ($id) {
    return "Produto de ID: {$id}";
});

Route::get('/categoria/{id}', function ($id) {
    return "Categoria de ID: {$id}";
});

Route::get('/usuario/{id}', function ($id) {
    return "Usuário de ID: {$id}";
});

Route::resource('alunos', AlunoController::class);