<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // ATV 4 - listar alunos
    public function index()
    {
        return 'Lista de alunos';
    }

    // ATV 4 - mostrar um aluno
    public function show($id)
    {
        return 'Visualizando aluno ' . $id;
    }

    // ATV 4 - formulário de cadastro
    public function create()
    {
        return 'Formulário de cadastro de aluno';
    }

    // ATV 4 - cadastrar aluno
    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    // ATV 4 - formulário de edição
    public function edit($id)
    {
        return 'Editando aluno ' . $id;
    }

    // ATV 4 - atualizar aluno
    public function update(Request $request, $id)
    {
        return 'Aluno ' . $id . ' atualizado';
    }

    // ATV 4 - excluir aluno
    public function destroy($id)
    {
        return 'Aluno ' . $id . ' excluído';
    }
}