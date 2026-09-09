<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome'  => 'required|string|max:255',
            'curso' => 'required|string|max:255',
        ]);

        Aluno::create($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {
        $dados = $request->validate([
            'nome'  => 'required|string|max:255',
            'curso' => 'required|string|max:255',
        ]);

        $aluno->update($dados);

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno removido com sucesso!');
    }
}

public function index()
{
    $alunosPorCurso = Aluno::where('curso', 'ADS')->get();
    $alunosPorNome = Aluno::where('nome', 'like', '%Silva%')->get();
    $alunosRecentes = Aluno::where('created_at', '>=', now()->subDays(7))->get();
    $totalAlunos = Aluno::count();

    return view('alunos.index', compact('alunosPorCurso', 'alunosPorNome', 'alunosRecentes', 'totalAlunos'));
}