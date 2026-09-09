<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de Alunos.';
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
use App\Http\Controllers\AlunoController;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/{id}', [AlunoController::class, 'show']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);
