@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    <form method="POST" action="/alunos">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <button type="submit">Salvar</button>
    </form>
@endsection

@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')
    <h1>Cadastrar Aluno</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/alunos">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}"><br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" value="{{ old('curso') }}"><br>

        <button type="submit">Salvar</button>
    </form>
@endsection