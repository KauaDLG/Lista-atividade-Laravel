@extends('layouts.app')

@section('title', 'Detalhes do Aluno')

@section('content')
    <h1>Detalhes do Aluno</h1>

    @if(isset($aluno))
        <p><strong>Nome:</strong> {{ $aluno->nome }}</p>
        <p><strong>Email:</strong> {{ $aluno->email }}</p>
    @else
        <p>Aluno não encontrado.</p>
    @endif
@endsection