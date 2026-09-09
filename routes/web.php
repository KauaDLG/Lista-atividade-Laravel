<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AlunoController;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::get('/alunos/{id}', [AlunoController::class, 'show']);
Route::get('/alunos/create', [AlunoController::class, 'create']);
Route::post('/alunos', [AlunoController::class, 'store']);
Route::get('/alunos/{id}/edit', [AlunoController::class, 'edit']);
Route::put('/alunos/{id}', [AlunoController::class, 'update']);
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy']);